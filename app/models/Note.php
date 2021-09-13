<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

     /*
     |--------------------------------------------------------------------------
     | Refectories
     |--------------------------------------------------------------------------
     */

    public static function allNotes()
    {
        return Note::with('card','user')->get();
    }


    /*
    |--------------------------------------------------------------------------
    | RelationShips
    |--------------------------------------------------------------------------
    */

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
