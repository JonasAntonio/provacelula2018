<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Estado extends Model
{
    protected $primaryKey = 'sigla';

    public $incrementing = false;

    protected $fillable = ['sigla','nome'];

    protected $table = 'Estado';
}
