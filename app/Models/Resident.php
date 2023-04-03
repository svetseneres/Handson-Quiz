<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resident extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['fname', 'lname', 'age', 'sex', 'bdate', 'bplace', 'address', 'contactno', 'email', 'religion' ];
    public function staffs(){
        return $this->belongsTo(Staff::class);
    }
}
 
