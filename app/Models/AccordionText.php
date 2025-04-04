<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class AccordionText extends Model
{
    use CrudTrait;
    protected $fillable = [
        'rank',
        'activity',
        'title',
        'text',
    ];
    protected $translatable = [
        'rank',
        'activity',
        'title',
        'text',
    ];
}
