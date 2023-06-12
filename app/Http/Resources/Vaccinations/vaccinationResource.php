<?php

namespace App\Http\Resources\Vaccinations;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class vaccinationResource extends JsonResource
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
            'queue' => 1,
            'vaccination_date' => $this->date,
            'spot_id' => $this->spot_id,
            'spot' => $this->spot,
            'status' => 'done',
            'vaccine_id' => $this->vaccine_id,
            'vaccine' => $this->vaccine->name,
            'medical_id' => $this->medical_id,
            'vaccinator' => $this->medical,
        ];
    }
}