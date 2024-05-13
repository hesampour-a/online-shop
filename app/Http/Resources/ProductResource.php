<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'count' => $this->count,
            'price' => $this->price,
            'description' => json_decode($this->description),
            'sizes' => json_decode($this->sizes),
            'colors' => json_decode($this->colors),
            'garanty' => $this->garanty,
            'long_description' => $this->long_description,
            'fa_title' => $this->fa_title,
            'brand' => new BrandResource($this->whenLoaded('product_brand')),
            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
