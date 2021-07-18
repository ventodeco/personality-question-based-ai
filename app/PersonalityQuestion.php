<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalityQuestion extends Model
{
    const TYPE_EXTROVERT = 'EXT';
    const TYPE_ESTROVERT = 'EST';
    const TYPE_AGRESSIVE = 'AGR';

    protected $table = 'personality_questions';
}
