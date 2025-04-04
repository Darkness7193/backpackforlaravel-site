<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class AccordionText extends Model
{
    use CrudTrait;
    protected $fillable = [
        'rank',
        'title',
        'text',
    ];
    protected $translatable = [
        'rank',
        'title',
        'text',
    ];
}
