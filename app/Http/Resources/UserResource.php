<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($request->isMethod('delete')) {
            return [];
        }
        if ($request->isMethod('get') && $request->route('uuid') != null) {
            return [
                'uuid' => $this->uuid,
                'name' => $this->name,
                'email' => $this->email,
                'task' => $this->task,
            ];
        }
        return [
            'uuid' => $this->uuid,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
