<?php

    namespace App\Models;

    use Althinect\FilamentSpatieRolesPermissions\Concerns\HasSuperAdmin;
    use App\Traits\Observable;
    use Filament\Models\Contracts\FilamentUser;
    use Filament\Panel;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Spatie\Permission\Traits\HasRoles;


    class User extends Authenticatable implements FilamentUser, MustVerifyEmail
    {
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory, Notifiable, HasRoles, HasSuperAdmin, Observable;

        /**
         * The attributes that are mass assignable.
         *
         * @var list<string>
         */
        protected $fillable = [
            'name',
            'email',
            'password',
        ];
        /**
         * The attributes that should be hidden for serialization.
         *
         * @var list<string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];


        public function canAccessPanel(Panel $panel): bool
        {
            return true; //$this->hasVerifiedEmail();
        }

        public function studio(): HasMany
        {
            return $this->hasMany(Studio::class);
        }

        /**
         * Get the attributes that should be cast.
         *
         * @return array<string, string>
         */
        protected function casts(): array
        {
            return [
                'email_verified_at' => 'datetime',
                'password' => 'hashed',
            ];
        }
    }
