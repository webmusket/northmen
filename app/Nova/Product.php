<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Panel;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\MorphMany;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Filters\ProductFeatured;
use Laravel\Nova\Filters\ProductQuantity;
use Laravel\Nova\Category;
use Infinety\Filemanager\FilemanagerField;
use Fourstacks\NovaRepeatableFields\Repeater;






class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Product';



    public static $displayInNavigation = false;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

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
            BelongsTo::make('category'),
            Text::make('name')->sortable()->rules('required'),
            Text::make('slug')->hideFromIndex()->sortable()->rules('required'),
            Trix::make('description')->hideFromIndex()->rules('required'),
            Number::make('low threshold','threshold')->sortable()->min(10)->max(100)->step(10)->rules('required'),
            Text::make('barcode')->sortable()->rules('required'),

            Boolean::make('featured')->sortable(),

            Boolean::make('custom')->sortable(),




            new Panel('More Information',$this->imageFields()),        

            new Panel('More Information',$this->priceFields()),

            new Panel('More Information',$this->attributeFields()),

            new Panel('More Information',$this->additionalFields()),


            
           

        ];
    }


    protected function imageFields(){
        return[
            Heading::make('<h3 class="">Product Image</h3>')->asHtml(),
           
            FilemanagerField::make('Model Image','model_image')
            ->displayAsImage()
            ->folder('products'),
            FilemanagerField::make('Fabric Image','fabric_image')
            ->displayAsImage()
            ->folder('products'),

            File::make('Attachment','attachment',function(Request $request){
                    return \Chumper\Zipper\Zipper::make($request->attachment->getClientOriginalName())->extractTo('public/images');
            })
                
               
            

        ];
    }
    protected function priceFields(){
        return[
            Heading::make('<h3 class="">Product Prices</h3>')->asHtml(),
            Number::make('regular price','reg_price')->hideFromIndex(),
            Number::make('sale price','sale_price')->hideFromIndex(),
        ];
    }

    protected function attributeFields(){
        return[
            Heading::make('<h3 class="">Product Inventory</h3>')->asHtml(),
            Repeater::make('Inventory','product_inventory')
            ->addField([
                // configuation options
                'label' => 'size',
                'placeholder' => 'size',
                'type' => 'select',
                'width' => 'w-1/4',
                'options' => [
                    'S' => 'Small',
                    'M' => 'Medium',
                    'L' => 'Large',
                    'XL' => 'Extra Large',
                    'XXL' => 'Double Extra Large',
                ]
            ])
            ->addField([
                // configuation options
                'label' => 'color',
                'placeholder' => 'color',
                'type' => 'select',
                'width' => 'w-1/4',
                'options' => [
                    'dusk_blue' => 'Dusk Blue',
                    'gracier_grey' => 'Glacier Grey',
                    'treetop' => 'Treetop',
                    'classic_blue' => 'Classic Blue',
                    'toasted_almond' => 'Toasted Almond',
                    'marsala' => 'Marsala',
                ]
            ])
            ->addField([
                // configuation options
                'label' => 'sku',
                'name' => 'sku',
                'placeholder' => 'sku',
                'width' => 'w-1/4',
            ])
            ->addField([
                // configuation options
                'label' => 'quantity',
                'name' => 'quantity',
                'type' => 'number',
                'placeholder' => 'quantity',
                'width' => 'w-1/4',
            ]),



        ];
    }


    protected function additionalFields(){
        return[
            Heading::make('<h3 class="">Product Additional Data</h3>')->asHtml(),
            Repeater::make('Additional Data','product_additional')
            ->addField([
                // configuation options
                'label' => 'key',
                'name' => 'key',
                'placeholder' => 'key',
                'width' => 'w-1/2',
            ])
            ->addField([
                // configuation options
                'label' => 'value',
                'name' => 'value',
                'placeholder' => 'value',
                'width' => 'w-1/2',
            ]),


            
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
        return [
            new Filters\ProductFeatured,
            new Filters\ProductQuantity,
        ];
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
        return [
            new Actions\PurchaseProduct,
        ];
    }
}
