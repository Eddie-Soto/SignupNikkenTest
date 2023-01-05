<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control_CI extends Model
{
    use HasFactory;
    protected $connection = 'marketing';
    protected $table = 'control_ci';
    protected $guarded = []; 
    public $timestamps = false;
    protected $primaryKey = "idcontrol_ci";
}
