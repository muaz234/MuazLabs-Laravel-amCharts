<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Topic extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'topics';

  /**
   * The links that belong to the Topic
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
   */
  public function links()
  {
      return $this->belongsToMany('App\Link')->using('App\LinkTopic');
  }
}
