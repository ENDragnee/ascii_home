<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class Media extends Model
{
    use HasUuids;

    protected $fillable = ['portfolio_id', 'mime_type', 'alt_text', 'url', 'file_size', 'is_thumbnail'];

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    //
    protected static function booted()
    {
        static::deleting(function (Media $media) {
            if ($media->url) {
                Storage::disk(config('filesystems.default'))->delete($media->url);
            }
        });
    }
}
