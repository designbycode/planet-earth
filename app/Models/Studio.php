<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Studio extends Model
    {
        /** @use HasFactory<\Database\Factories\StudioFactory> */
        use HasFactory, SoftDeletes;

        protected $fillable = [
            "user_id",
            "name",
            "description",
            "content",
            "website",
            "contact_email",
            "phone",
        ];


        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

    }
