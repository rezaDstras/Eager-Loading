<?php

namespace App\Http\Controllers;

use App\Http\Resources\CardResource;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function allCards()
    {
        return CardResource::collection(Card::allCards());
    }

    public function show(Card $card)
    {
        return new CardResource(Card::showCard($card));

    }
}
