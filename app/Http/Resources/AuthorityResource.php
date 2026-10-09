<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorityResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'institution' => $this->institution,
            'position' => $this->position,
            'id_number' => $this->id_number,
            'password' => $this->password,
            'created_at' => $this->created_at,
        ];
    }
}
