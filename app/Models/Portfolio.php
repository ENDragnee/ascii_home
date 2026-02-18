<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasUuids;

    protected $fillable = ['title', 'description', 'color', 'link'];

    public function media(): HasMany
    {
        return $this->hasMany(Media::class, 'portfolio_id');
    }

    //
    //
    protected static function booted(): void
    {
        static::deleting(function (Portfolio $portfolio) {
            $portfolio->media->each(function ($media) {
                $media->delete();
            });
        });
    }
}
