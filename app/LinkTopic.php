<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LinkTopic extends Pivot
{
    protected $connection = 'mysql2';
    protected $table = 'link_topics';
    
}
