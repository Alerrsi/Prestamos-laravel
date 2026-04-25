<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{

    use SoftDeletes;
    protected $table = "equipments";
    protected $fillable = [
        "name",
        "serial_number",
        
    ];


    public function category() {
        return $this->belongsTo(Category::class);
    }
}
