<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getId () {
        return $this->attributes['id'];
    }
    public function setId ($id) {
        $this->attributes['id']= $id;
    }
    public function getName () {
        return $this->attributes['name'];
    }
    public function setName ($name){
        $this->attributes['name']= $name;
    }
    public function getDescription () {
        return $this->attributes['description'];
    }
    public function setDescription ($description) {
        $this->attributes['description']= $description;
    }
    public function getPrice () {
        return $this->attributes['price'];
    }
    public function setPrice ($price) {
        $this->attributes['price']= $price;
    }

    public function purchase_details(){
        return $this->hasOne(PurchaseDetail::class);
    }
}

