<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

/* aaaa */

class Offer extends Model
{
    use Rateable;

    protected $table = 'offers';
    public $primaryKey = 'id';
    public $timestamps = true;
}
