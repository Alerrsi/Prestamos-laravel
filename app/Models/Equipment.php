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
        "user_id",
        "category_id"
    ];


    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
