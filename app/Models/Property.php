<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Property extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title', 'uuid', 'slug', 'description',
        'category_id', 'user_id', 'address',
        'start_date', 'end_date', 'gallery_id',
        'price', 'status', 'is_featured',
    ];

    protected $casts = [
        'gallery_id' => 'array',
        'price' => 'float',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'user_id' => 'integer',
        'is_featured' => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('property-images');
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($property) {
            $property->slug = Str::slug($property->title);
            $property->uuid = Str::uuid();
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
