<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\Categories;
use App\Model\Products;
use Cart;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['prod_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','asc')->take(3)->get();
        $data['product_popular']=Products::where('prod_id','>',1)->orderBy('prod_id','desc')->take(3)->get();
        $data['category']=Categories::all();
        view()->share($data);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
