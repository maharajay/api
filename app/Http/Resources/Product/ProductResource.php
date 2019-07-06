<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->detail,
            'price' => $this->price,
            'totalPrice' => $this->price-($this->price * $this->discount)/100,
            'stock' => $this->stock > 0 ? $this->stock : 'out of stock',
            'discount' => $this->discount,
            'rating' => $this->reviews->count() > 0 ?round($this->reviews->sum('star')/$this->reviews->count()):'no rating yet',
            'href' => [
                'reviews' => route('reviews.index',$this->id)
            ]
        ];
    }
}
