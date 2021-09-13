<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public static function allCards()
    {
        return  Card::with('notes.user')->get();
    }

    public static function showCard($card)
    {
        //Eager Loading To Garb Data
        return $card->load('notes.user');
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
