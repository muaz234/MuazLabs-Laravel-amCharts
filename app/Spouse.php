<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Spouse extends Model
{
    //

    protected $table = 'spouse';
    protected $guarded = [];
    protected $fillable = [];

    public function parents()
    {
        return $this->belongsTo('App\Parents');
    }

    public function children()
    {
        return $this->hasMany('App\Children', 'spouse_id');
    }
}
