<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'surname', 'phone', 'updated_at'];
    protected $table = 'clients';
}
