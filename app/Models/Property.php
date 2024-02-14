<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Property extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable = ['title','slug','description',
                            'category_id','user_id','address',
                            'start_date','end_date', 'gallery_id',
                            'price','status'];

    protected $casts = [
        'gallery_id' => 'array',
        'price' => 'float',
        'start_date' => 'date',
        'end_date' => 'date',
        'user_id' => 'integer',
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
        });
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
