<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatService extends Model
{
    use HasFactory;
    protected $fillable = ['libelle','slug'];
    
    public function services(){
        return $this->hasMany(Service::class);
    }
}
