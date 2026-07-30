<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $userId = Auth::guard('customer')->id();
            $cartItems = collect();
            $total = 0;
            $productCount = 0;

            if ($userId) {
                $cartItems = Cart::with('product')
                                 ->where('user_id', $userId)
                                 ->get();

                $total = $cartItems->sum(function ($item) {
                    return $item->sales_price * $item->quantity;
                });

                $productCount = $cartItems->sum('quantity');
            }

            $view->with('cartItems', $cartItems)
                 ->with('total', $total)
                 ->with('productCount', $productCount);
        });
    }
}
