<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lokasi extends Model{
    protected $primaryKey = 'id';
    protected $table = 'lokasi';
    protected $fillable = ['namaTempat','latitude','longlitude'];
}

 ?>
