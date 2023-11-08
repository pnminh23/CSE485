<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;
    protected $fillable = [
        "id","name","description","image_url","created_at","updated_at",
    ] ;
    public function regions(){
        return $this->hasMany(Region::class,"flower_id","id");
    }
}
