<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    // Table name
    protected $table = 'servers';
    //Primary Key   
    public $primaryKey = 'id';
}
