<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray($request)
    {
        $orderLines = [];
        $orderTotal = 0;

        foreach ($this->lines as $line) {
            $orderLines[] = [
                'amount'      => $line->amount,
                'description' => $line->description,
                'price'       => $line->price,
            ];

            $orderTotal += (int)$line->amount * (int)$line->price;
        }

        return [
            'id'          => $this->id,
            'date'        => Carbon::parse($this->date)->format('Y-m-d'),
            'description' => $this->description,
            'total'       => $orderTotal,
            'orderLines'  => $orderLines,
        ];
    }

}
