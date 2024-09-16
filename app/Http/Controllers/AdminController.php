<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use App\Models\Contatti;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        
    }
    public function crea_camera(){
        return view('admin.crea_camera');
    }
    public function add_camera(request $request){
        $data = new Room();
        $data->titolo = $request->titolo;
        $data->descrizione = $request->descrizione;
        $data->wifi = $request->wifi;
        $data->tipo = $request->tipo;
        $data->prezzo = $request->prezzo;
        $immagine = $request->immagine;
        if($immagine){
            $imagename=time().'.'.$immagine->getClientOriginalExtension();
            $request->immagine->move('room',$imagename);
            $data->immagine=$imagename;
        }
        $data->save();

        $notification = array(
            'message' => 'Camera aggiunta con successo',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
    public function mostra_camere(){
        $data = Room::all();
        return view('admin.mostra_camere',compact('data'));
    }
    public function elimina_camera($id){
        $data = Room::find($id);
        $data->delete(); 

        $notification = array(
            'message' => 'Camera eliminata con successo',
            'alert-type' => 'error'
        );

        return back()->with($notification); 
    }
    public function edit_camera(request $request, $id){
        $data = Room::find($id);
        $data->titolo = $request->titolo;
        $data->descrizione = $request->descrizione;
        $data->wifi = $request->wifi;
        $data->tipo = $request->tipo;
        $data->prezzo = $request->prezzo;
        $immagine = $request->immagine;
        if($immagine){
            $imagename=time().'.'.$immagine->getClientOriginalExtension();
            $request->immagine->move('room',$imagename);
            $data->immagine=$imagename;
        }
        $data->save();

        $notification = array(
            'message' => 'Camera modificata con successo',
            'alert-type' => 'warning'
        );

        return back()->with($notification);
    }
    public function prenotazioni(){
        $data = Booking::all();
        return view('admin.prenotazione',compact('data'));
    }
    public function elimina_prenotazione($id){
        $data = Booking::find($id);
        $data->delete(); 

        $notification = array(
            'message' => 'Prenotazione eliminata con successo',
            'alert-type' => 'warning'
        );

        return back()->with($notification); 
    }
    public function approva_prenotazione($id){
        $prenotazione = Booking::find($id);
        $prenotazione->status = 'Approvata';
        $prenotazione->save();

        $notification = array(
            'message' => 'Prenotazione Approvata con successo',
            'alert-type' => 'success'
        );

        return back()->with($notification);  
    }
    public function annulla_prenotazione($id){
        $prenotazione = Booking::find($id);
        $prenotazione->status = 'Annullata';
        $prenotazione->save();

        $notification = array(
            'message' => 'Prenotazione Annullata con successo',
            'alert-type' => 'warning'
        );

        return back()->with($notification);  
    }
    public function aggiungi_messaggio(request $request){
        $data = new Contatti;
        $data->nome = $request->name;
        $data->email = $request->email;
        $data->telefono = $request->telefono;
        $data->message = $request->message;
        $data->save();

        $notification = array(
            'message' => 'Messaggio inviato allo staff del sito.',
            'alert-type' => 'success'
        );

        return back()->with($notification);  
    }
    public function messaggi(){
        $data = Contatti::all();
        return view('admin.mostramessaggi',compact('data'));
    }
}
