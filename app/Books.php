<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable = ['name', 'date', 'count', 'info', 'genre_id', 'file', 'image', 'is_new'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
