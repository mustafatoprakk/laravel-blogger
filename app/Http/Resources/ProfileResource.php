<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            "id" => $this->id,
            "type" => "Profile",
            "attributes" => [
                "name" => $this->name,
                "email" => $this->email,
                "password" => $this->password,
                "is_admin" => $this->is_admin,
                "image" => $this->image
            ],
        ];
    }
}
