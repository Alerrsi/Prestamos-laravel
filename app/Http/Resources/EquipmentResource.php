<?php

namespace App\Http\Resources;

use Illuminate\Database\Eloquent\Attributes\UseResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
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
            "nombre" => $this->name,
            "sn" => $this->serial_number,
            "estado" => $this->estado ? "Disponible" : "En uso o en  Mantenimiento",
            "categoria" => new CategoryResource($this->whenLoaded("category")),
            "creado por" => new UserResource($this->whenLoaded("user")),
            "creado el" => $this->created_at->format("d-m-Y"),
            "actualizado el" => $this->updated_at->format("d-m-Y"),
            
        ];
    }
}
