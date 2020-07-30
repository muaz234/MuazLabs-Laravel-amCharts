<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    //
    protected $table = 'children';

    protected $guarded = [];
    protected $fillable = [];

    public function parents()
    {
        return $this->belongsTo('App\Parents');
    }

    public function spouse()
    {
        return $this->belongsTo('App\Spouse');
    }
}
