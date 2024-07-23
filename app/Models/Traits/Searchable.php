<?php

namespace App\Models\Traits;


use Illuminate\Database\Eloquent\Builder;

trait Searchable {

    public static function bootSearchable() {
        if(!property_exists(static::class, 'searchable')) {
            throw new \Exception(sprintf("There is not property 'searchable' for Searchable trait on [%s]", static::class));
        }
    }

    public function scopeSearch(Builder $query, string $search, array $extraSearchables = []) {
        return $query->whereAny(array_merge($this->searchable, $extraSearchables), 'LIKE', "%$search%");
    }

    public function getSearchable(): array {
        return $this->searchable;
    }
}
