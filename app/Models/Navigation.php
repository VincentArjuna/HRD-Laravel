<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Navigation::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Navigation::class, 'parent_id');
    }
}
