<?php

namespace App;

class buyer extends User
{
    public function transactions(){
        return $this->hasMany(transaction::class);
    }
}
