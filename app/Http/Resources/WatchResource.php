<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WatchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "Model" => $this->Model,
            "Brand_Id" => $this->Brand_Id,
            "Case_Material" => $this->Case_Material,
            "Strap_Material" => $this->Strap_Material,
            "Movement_Type" => $this->Movement_Type,
            "Water_Resistance" => $this->Water_Resistance,
            "Case_Diameter" => $this->Case_Diameter,
            "Case_Thickness" => $this->Case_Thickness,
            "Band_Width" => $this->Band_Width,
            "Dial_Color" => $this->Dial_Color,
            "Crystal_Material" => $this->Crystal_Material,
            "Power_Reserve" => $this->Power_Reserve,
            "Price_USD" => $this->Price_USD,
            "Brand" => $this->brand,
        ];
    }
}
