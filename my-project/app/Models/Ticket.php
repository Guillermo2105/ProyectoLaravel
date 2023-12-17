<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    public function purchase_detail(){
        return $this->hasOne(PurchaseDetail::class);//has one de uno a uno
    }
    public function section(){
        return $this->hasOne(PurchaseDetail::class);//has one de uno a uno
    }
}
