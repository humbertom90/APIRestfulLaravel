<?php

namespace App;

class seller extends User
{
    public function products(){
        $this->hasMany(product::class);
    }
}
