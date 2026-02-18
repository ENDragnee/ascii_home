<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage; // Import Storage facade

class Media extends Model
{
    use HasUuids;

    protected $fillable = ['portfolio_id', 'mime_type', 'alt_text', 'url', 'file_size'];

    public function porfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    //
    protected static function booted()
    {
        static::deleting(function (Media $media) {
            if ($media->url) {
                Storage::disk('public')->delete($media->url);
            }
        });
    }
}
