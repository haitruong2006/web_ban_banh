<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bill;
use App\Models\Products;

class Bill_detail extends Model
{
    use HasFactory;
    protected $table="bill_detail";
    protected $fillable=['id_bill', 'id_product', 'quantity', 'unit_price'];

    public function bill(){
        return $this->belongsTo(Bill::class,'id_bill','id');
    }

    public function product(){
        return $this->belongsTo(Products::class,'id_product','id');
    }

}
