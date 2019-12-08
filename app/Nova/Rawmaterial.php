<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Number;
use Infinety\Filemanager\FilemanagerField;
use Waynestate\Nova\CKEditor;
use PalauaAndSons\TagsField\Tags;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Benjaminhirsch\NovaSlugField\Slug;
use Benjaminhirsch\NovaSlugField\TextWithSlug;
use Blueknot\SuperCategory\SuperCategory;
use Laravel\Nova\Panel;
use Fourstacks\NovaRepeatableFields\Repeater;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;

class Rawmaterial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Rawmaterial';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';


    public static $displayInNavigation = false;

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
            TextWithSlug::make('Title')
                ->slug('slug'),

            Slug::make('Slug')
                ->showUrlPreview('http://www.foo.bar'),
            CKEditor::make('description')->hideFromIndex()->rules('required'),
            

            new Panel('Category',$this->categoryFields()),

            new Panel('Tags',$this->tagfields()),

            new Panel('Product Image',$this->imageFields()),        

            new Panel('Pricing',$this->priceFields()),

            new Panel('Inventory',$this->attributeFields()),

            new Panel('Additional Attribute',$this->additionalFields()),

            new Panel('Save & Publish',$this->savepublishFields()),
        ];
    }
    protected function categoryFields(){
        return[
            SuperCategory::make('Category'),
        ];
    }

    protected function tagfields(){
        return[
            Tags::make('Tags'),
        ];
    }

    protected function imageFields(){
        return[
            FilemanagerField::make('Image')->displayAsImage(),
        ];
    }
    protected function priceFields(){
        return[
            Number::make('Regular Price','regular-price')->hideFromIndex(),
            Number::make('Sale Price','sale-price')->hideFromIndex(),
            Number::make('Purchase Price','purchase-price')->hideFromIndex(),
        ];
    }

    protected function attributeFields(){
        return[
            Number::make('Sku')->hideFromIndex(),
            Number::make('Barcode')->hideFromIndex(),
            Number::make('Quantity')->hideFromIndex(),
            Number::make('Threshold')->hideFromIndex(),
        ];
    }


    protected function additionalFields(){
        return[
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

    protected function savepublishFields(){
        return[
            Boolean::make('Save as a Draft','draft')
                ->trueValue(1)
                ->falseValue(0),
            DateTime::make('Publish At')->hideFromIndex()           
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
