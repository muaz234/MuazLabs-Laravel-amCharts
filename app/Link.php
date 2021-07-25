<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Link extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'links';
    
   /**
    * The topics that belong to the Link
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function topics()
   {
       return $this->belongsToMany('App\Topic')->using('App\LinkTopic');
   }
  
}
