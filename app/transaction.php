<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'quantity',
        'buyer_id',
        'product_id',
    ];

    public function buyer(){
        return $this->belongsTo(buyer::class);
    }

    public function product(){
        return $this->belongsTo(product::class);
    }
}
