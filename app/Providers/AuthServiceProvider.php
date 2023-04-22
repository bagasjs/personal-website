<?php

namespace App\Providers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define("post-owner", function(User $user, Post $post){
            if($post->author->id === $user->id)
                return Response::allow();
            else
                return Response::deny("You should be the owner of this post");
        });
    }
}
