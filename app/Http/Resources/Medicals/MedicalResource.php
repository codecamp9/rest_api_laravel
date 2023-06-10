<?php

namespace App\Http\Resources\Medical;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // 'id' => $this->id,
            // 'spot_id' => $this->spot_id,
            // 'user_id' => $this->user_id,
            // 'role' => $this->role,
            'name' => $this->name,
        ];
    }
}