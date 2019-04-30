<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Category;

use App\Cart;

use Session;

use App\Customer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view)
            {
                $category = Category::all();
                $view->with('category',$category);
            });

        view()->composer('header',function($view)
            {
                //giỏ hàng
                if(Session('cart'))
                {
                    $oldCart = Session::get('cart');
                    $cart = new Cart($oldCart);
                    $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQuantity'=>$cart->totalQuantity]);
                }
                //kết thúc giỏ hàng
            });

        view()->composer('page/cart',function($view)
            {
                if(Session('cart'))
                {
                    $oldCart = Session::get('cart');
                    $cart = new Cart($oldCart);
                    $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQuantity'=>$cart->totalQuantity]);
                }
            });

        view()->composer('header',function($view){
            $idcus = Session::get('idcus')['id'];
            $namecus = Customer::where('id',$idcus)->select('Name_Customer')->first();
            $view->with('namecus',$namecus);
        });
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
