<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories_model extends Model
{
    protected $table='categories';
    protected $primaryKey='id';
    protected $fillable=['name'];
}
