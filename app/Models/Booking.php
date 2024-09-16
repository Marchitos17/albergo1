<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_id',
        'name',
        'email',
        'telefono',
        'start_date',
        'fine_date',
    ];
    public function room(){
        return $this->hasOne('App\Models\Room','id','room_id'); //relazione 1 a 1 con un altra tabella.
    }
}
