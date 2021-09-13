<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
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
            'title' => $this->title,
            'note' => $this->whenLoaded(
                'notes',
                function () {
                    return NoteResource::collection($this->notes);
                }
            ),
            'user' => $this->whenLoaded(
                'user',
                function () {
                    return UserResource::collection($this->user);
                }
            ),
        ];
    }
}
