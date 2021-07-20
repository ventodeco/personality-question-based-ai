<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduation extends Model
{
    // for prediciton
    const ONTIME = 0;
    const LATE   = 1;

    // for type
    const EIGHT_SEMESTER = 'eight';
    const SEVEN_SEMESTER = 'seven';
    const SIX_SEMESTER   = 'six';
    const FIVE_SEMESTER  = 'five';

    protected $table = 'graduations';

}
