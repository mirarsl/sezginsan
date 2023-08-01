<?php

namespace App\Providers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use App\Contact;
use App\Social;
use App\Product;
use App\Policy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {   
        $Contact = Contact::find(1);
        View::share('Contact',$Contact);

        $Social = Social::find(1);
        View::share('Social',$Social);

        $FooterProducts = Product::where('status',1)->orderBy('ordering')->orderBy('created_at','desc')->limit(6,0)->get();
        View::share('FooterProducts',$FooterProducts);

        $Policy = Policy::where('status',1)->orderBy('ordering')->orderBy('created_at','desc')->get();
        View::share('Policy',$Policy);

        
        Paginator::defaultView('pagination.index');
    }
}
