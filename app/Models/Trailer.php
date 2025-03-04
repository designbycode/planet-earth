<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

    class Trailer extends Model
    {
        /** @use HasFactory<\Database\Factories\TrailerFactory> */
        use HasFactory, SoftDeletes;

        protected $fillable = [
            "title",
            "code",
            "author",
            "description",
        ];
    }
