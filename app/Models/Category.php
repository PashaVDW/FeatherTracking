<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory, HasUuids, HasTimestamps;

    protected $dates = ['created_at', 'updated_at'];

    protected $fillable = [
    "name",
    "description",
    "type",
    ];

    public function items(): HasMany {
        return $this->hasMany(CategoryItem::class);
    }

}
