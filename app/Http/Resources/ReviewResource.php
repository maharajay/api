<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'customer' => $this->customer,
            'comments' => $this->comments,
            'rating' => $this->count() > 0 ?round($this->sum('star')/$this->count()):'no rating yet',
        ];
    }
}
