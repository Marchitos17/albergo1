<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view_camera($id){
        $data = Room::find($id);
        return view('home.view_camera',compact('data'));
    }
    public function add_prenotazione($id){
        $profilo = Room::find($id);
        return view('home.add_prenotazione',compact('profilo'));
    }
    public function aggiungip(request $request, $id){

        $request->validate([
            'InizioD' => 'required|date',
            'FineD'=>'date|after:InizioD',
        ]);
        $data = new Booking;
        $data->room_id= $id;
        $data->name = $request->nome;
        $data->email = $request->email;
        $data->telefono = $request->telefono;
        //Controllo data gia prenotato NON FUNZIONAAAAAAAAAAAAAAAAAAAAAAAA

        $start_data = $request->InizioD;
        $fine_data = $request->FineD;

        $prenotata = Booking::where('room_id',$id)
        ->where('start_date','<=',$fine_data)
        ->where('fine_date','>=',$start_data)
        ->exists();

        if($prenotata)
        {
            $notification = array(
                'message' => 'Le date sono gia prenotate o sono sbagliate',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
         }else{

            $data->start_date = $request->InizioD;
            $data->fine_date = $request->FineD;
            $data->save();

            $notification = array(
                'message' => 'Camera prenotata con successo',
                'alert-type' => 'success'
            );

            return redirect()->route('home')->with($notification);
        }
    }
    public function prenotazioni(){
        $profilo= User::find(Auth()->user()->id);
        return view('home.prenotazioni',compact('profilo'));
    }
    public function update(request $request,$id){
        $data = User::find($id);
        $data->name = $request->name;
        $data->cognome = $request->cognome;
        $data->telefono = $request->telefono;
        $data->indirizzo = $request->indirizzo;
        $data->email = $request->email;
        $data->nomecarta = $request->nomecarta;
        $data->numerocarta = $request->numerocarta;
        $data->tipocarta = $request->tipocarta;
        $foto = $request->foto;
        if($foto){
            $imagename=time().'.'.$foto->getClientOriginalExtension();
            $request->foto->move('room',$imagename);
            $data->foto=$imagename;
        }
        $data->save();

        return redirect()->back();
    }
}
