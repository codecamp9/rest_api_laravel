<?php

namespace App\Http\Resources\Spots;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpotResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'address' => $this->address,
            'serve' => $this->serve,
            'capacity' => $this->capacity,
            'available_vaccines' => [
                'Sinovac' => true,
                'AstraZeneca' => false,
                'Moderna' => true,
                'Pfizer' => true,
                'Sinnopharm' => false,
            ],
        ];
    }
}