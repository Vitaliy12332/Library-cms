<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class genres extends Model
{
    protected $fillable = ['title'];

    public function books()
    {
        return $this->hasMany(Books::class);
    }


}
