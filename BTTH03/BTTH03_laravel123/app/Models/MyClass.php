<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyClass extends Model
{
    public function students(){
        return $this->hasMany(MyClass::class,'myclass_id','id');
    }
    use HasFactory;
    protected $fillable = [
        'id','name_class','update_at','create_at',
    ];
}
