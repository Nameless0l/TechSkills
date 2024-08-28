<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EditorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name'=>$this->user->name,
            'user_id'=>$this->user->id,
            'email'=>$this->user->email,
            'login'=>$this->user->login,
            'image'=>$this->user->image,
            'biography'=>$this->biography,
            'socialNetworks'=>$this->socialNetworks,
        ];
    }
}
