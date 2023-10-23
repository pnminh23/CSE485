<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function myClass(){
        return $this->belongsTo(MyClass::class, 'myclass_id','id');
    }
    use HasFactory;

    protected $fillable = [
        'id','name','email','phone_number','myclass_id','update_at','create_at',
    ] ;
}
