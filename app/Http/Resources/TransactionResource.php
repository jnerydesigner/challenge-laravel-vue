<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
          'id'          => (integer)$this->id,
          'type'        => (integer)$this->type,
          'title'       => (string)$this->title,
          'amount'      => (string)$this->amount,
          'slug'        => (string)$this->slug,
          'created_at'  => (string)$this->created_at,
        ];
    }
}
