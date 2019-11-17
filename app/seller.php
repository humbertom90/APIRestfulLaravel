<?php

namespace App;

class seller extends User
{
    public function products(){
        return $this->hasMany(product::class);
    }
}
