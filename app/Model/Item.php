<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $primaryKey = 'id_lokasi';
    protected $table = 'lokasi';
    protected $fillable = ['name','latitude','longlitude'];

}
