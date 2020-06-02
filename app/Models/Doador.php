<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doador extends Model
{
    protected $table = 'doador';
    protected $guarded = ['name', 'email', 'tipo_sanguineo'];
}
