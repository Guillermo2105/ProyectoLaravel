<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function getPagado()
    {
        return $this->attributes['pagado'];
    }


    public function setPagado($pagado)
    {
        $this->attributes['pagado'] = $pagado;
    }

    public function getFechahora()
    {
        return $this->attributes['fechaHora'];
    }


    public function setFechahora($fechaHora)
    {
        $this->attributes['fechaHora'] = $fechaHora;
    }

    public function getSubtotal()
    {
        return $this->attributes['subtotal'];
    }


    public function setSubtotal($subtotal)
    {
        $this->attributes['subtotal'] = $subtotal;
    }

    public function getIva()
    {
        return $this->attributes['iva'];
    }


    public function setIva($iva)
    {
        $this->attributes['iva'] = $iva;
    }

    public function getTotal()
    {
        return $this->attributes['total'];
    }


    public function setTotal($total)
    {
        $this->attributes['total'] = $total;
    }

    public function purchase_details()
    {
        return $this->hasMany(PurchaseDetail::class); //hasmany es para definir de uno a muchos
    }
}
