<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\Heading;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Setting extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Setting';

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
            Number::make('refferal_amount',function(){
                return "$".$this->refferal_amount;
            }),
            Number::make('Refferal Amount','refferal_amount'),
            Text::make('Site Name','site_name'),
            Image::make('Site Logo','site_logo'),
            Text::make('Site Url','site_url'),

            new Panel('More',$this->frontFields()),
            Text::make('Slogan','slogan'),
            new Panel('More',$this->commitment1Fields()),
            new Panel('More',$this->commitment2Fields()),
            new Panel('More',$this->commitment3Fields()),


        ];
    }


    protected function frontFields(){
        return[
            Heading::make('<h3 class="">Commitment First Card</h3>')->asHtml(),
            
            Text::make('title')->hideFromIndex(),
            Image::make('image')->hideFromIndex(),
            Trix::make('details')->hideFromIndex(),

        ];
    }

    protected function commitment1Fields(){
        return[
            Heading::make('<h3 class="">Commitment First Card</h3>')->asHtml(),
            Image::make('commitment_image1')->hideFromIndex(),
            Text::make('commitment_head1')->hideFromIndex(),
            Trix::make('commitment_details1')->hideFromIndex(),

        ];
    }
    protected function commitment2Fields(){
        return[
            Heading::make('<h3 class="">Commitment Second Card</h3>')->asHtml(),
            Image::make('commitment_image2')->hideFromIndex(),
            Text::make('commitment_head2')->hideFromIndex(),
            Trix::make('commitment_details2')->hideFromIndex(),

        ];
    }
    protected function commitment3Fields(){
        return[
            Heading::make('<h3 class="">Commitment Third Card</h3>')->asHtml(),
            Image::make('commitment_image3')->hideFromIndex(),
            Text::make('commitment_head3')->hideFromIndex(),
            Trix::make('commitment_details3')->hideFromIndex(),

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
