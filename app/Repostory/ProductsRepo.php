<?php

namespace App\Repostory;

class ProductsRepo
{
    public function getProducts($id)
    {
        return $this->where('products' , $id);
    }
}
