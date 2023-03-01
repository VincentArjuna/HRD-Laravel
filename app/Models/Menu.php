<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use JsonSerializable;
use stdClass;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function actives() : Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value),
            set: fn ($value) => is_array($value) || $value instanceof JsonSerializable || $value instanceof stdClass ? json_encode($value) : $value,
        );
    }
}
