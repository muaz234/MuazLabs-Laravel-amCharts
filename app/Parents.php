<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    //
    protected $table = 'parents';

    protected $guarded = [];
    protected $fillable = [];

    // define relationship for parents and spouse
    public function spouse()
    {
        return $this->hasOne('App\Spouse');
    }

    public function children()
    {
      return  $this->hasMany('App\Children');
    }
}
