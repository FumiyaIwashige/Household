<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $fillable = [
        'name',
        'cost',
        'category_id',
    ];
    
    // Category に対するリレーション，「1対1」
    
    public function category() 
    {
        return $this->belongsTo('App\Category');
    }
}
