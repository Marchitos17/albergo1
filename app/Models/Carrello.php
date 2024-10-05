<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrello extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'room_id',
    ];
    public function user(){
        return $this->hasOne('App\Models\User','id','user_id'); //relazione one to one relazione tra chiave interna e chiave esterna
    }
    public function product(){
        return $this->hasOne('App\Models\Room','id','room_id');
    }
}
