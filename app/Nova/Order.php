<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class Order extends Resource
{


    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Order';


    public static $displayInNavigation = false;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    public static function delete(){
        return false;
    }




    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('User'),
            Text::make('User Email','user_email'),
            BelongsTo::make('Product'),
            Text::make('address')->hideFromIndex(),
            Text::make('city')->hideFromIndex(),
            Text::make('state'),
            Text::make('pincode')->hideFromIndex(),
            Text::make('mobile')->hideFromIndex(),
            Text::make('grand Total','grand_total')->hideFromIndex(),
            Text::make('coupon code','coupon_code')->hideFromIndex(),

            Text::make('coupon amount','coupon_amount')->hideFromIndex(),
            Text::make('payment method','payment_method')->hideFromIndex(),
            Text::make('grand total','grand_total')->hideFromIndex(),
            Select::make('order status','order_status')->options([
                'Hold' => 'Hold',
                'Delivered' => 'Delivered',
                'Cancel' => 'Cancel',
                
            ]),

            Date::make('created at','created_at')


        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
