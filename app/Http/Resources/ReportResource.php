<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'reporterName' => $this->reporterName,
            // 'reporterPhone' => $this->reporterPhone,
            'category' => $this->category,
            'urgency' => $this->urgency,
            'status' => $this->status,
            'location' => $this->location,
            'descriptionValue' => $this->descriptionValue,
            'photoInput' => $this->photoInput
                ? asset('storage/' . $this->photoInput)
                : null,
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
