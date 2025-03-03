<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    use Spatie\MediaLibrary\HasMedia;
    use Spatie\MediaLibrary\InteractsWithMedia;
    use Spatie\MediaLibrary\MediaCollections\Models\Media;

    class Event extends Model implements HasMedia
    {
        /** @use HasFactory<\Database\Factories\EventFactory> */
        use HasFactory, SoftDeletes, InteractsWithMedia;

        protected $fillable = [
            "title",
            "slug",
            "description",
            "event_start",
            "event_end",
            "location"
        ];

        public function registerMediaCollections(): void
        {
            $this
                ->addMediaCollection('events')
                ->useFallbackUrl(url('https://placehold.co/600x400'))
                ->registerMediaConversions(function (Media $media) {
                    $this
                        ->addMediaConversion('card')
                        ->width(600)
                        ->height(400);

                    $this
                        ->addMediaConversion('big')
                        ->width(1200)
                        ->height(800);
                });
        }

        protected function casts(): array
        {
            return [
                'event_start' => 'datetime',
                'event_end' => 'datetime'
            ];
        }

    }
