<?php

    namespace App\Providers;

    use App\Models\User;
    use App\Policies\PermissionPolicy;
    use App\Policies\RolePolicy;
    use Illuminate\Support\Facades\Gate;
    use Illuminate\Support\ServiceProvider;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;

    class AuthServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap services.
         */
        public function boot(): void
        {
            Gate::policy(Role::class, RolePolicy::class);
            Gate::policy(Permission::class, PermissionPolicy::class);

            Gate::before(function (User $user, string $ability) {
                return $user->isSuperAdmin() ? true : null;
            });
        }
    }
