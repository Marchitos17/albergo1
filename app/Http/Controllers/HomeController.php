<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
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
}
