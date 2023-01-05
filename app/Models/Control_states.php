<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Control_states extends Model
{
    use HasFactory;
    protected $connection = 'marketing';
    protected $table = 'control_states';
    protected $guarded = []; 
    public $timestamps = false;
    protected $primaryKey = "id_control_ciudades_general";
    
}
