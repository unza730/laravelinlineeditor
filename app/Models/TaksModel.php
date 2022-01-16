<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaksModel extends Model
{
    use HasFactory;
    protected $table = "taksmodels";
     protected $fillable = [
         'name',
         'agentname',
         'nooftask',
         'taskstatus',
     ];
}
