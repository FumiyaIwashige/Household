<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Spending に対するリレーション，「1対多」
    
    public function spendings()   
    {
        return $this->hasMany('App\Spending');  
    }
}
