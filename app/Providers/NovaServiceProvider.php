<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use App\Nova\Metrics\ProductCount;
use App\Nova\Metrics\UserCount;
use App\Nova\Metrics\NewOrders;
use Asad\SuperProduct\SuperProduct;
use Asad\SuperDiscount\SuperDiscount;
use Asad\SuperCustomization\SuperCustomization;
use Asad\OrderManagement\OrderManagement;
use Asad\MenuBuilder\MenuBuilder;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            
            new ProductCount,
            new UserCount,
            new NewOrders,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new SuperCustomization,
            new SuperProduct,
            new SuperDiscount,
            new OrderManagement,
            new MenuBuilder,
            \Vyuldashev\NovaPermission\NovaPermissionTool::make(),
            new \Infinety\Filemanager\FilemanagerTool(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Nova::style('nova-custom', public_path('css/nova.css'));
    }
}
