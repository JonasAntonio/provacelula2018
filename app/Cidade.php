<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['nome'];

    protected $guarded = ['codigo', 'sigla_estado'];

    protected $table = 'Cidade';
}
