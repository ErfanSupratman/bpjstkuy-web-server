<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->withoutWrapping();
        
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'nik' => $this->nik,
            'place_birth' => $this->place_birth,
            'dob' => $this->dob,
            'address' => $this->address,
            'path_dp' => $this->full_path_dp,
            'token' => $this->token,
        ];
    }
}
