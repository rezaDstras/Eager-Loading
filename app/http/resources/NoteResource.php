<?php

namespace App\Http\Resources;
use App\Http\Resources\CardResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'body' => $this->body,
            'created_at' =>$this->created_at,
            'card_id'=> new CardResource($this->card),
            'user_id' => new UserResource($this->user)

        ];
    }
}
