<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serieslist extends Model
{
    protected $fillable = ['sname'];

    public function sname()
    {
        return $this->hasOne('App\Productlist','sname','sname');
    }
}
