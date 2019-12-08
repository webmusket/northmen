<?php

namespace Blueknot\SuperCategory;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class SuperCategory extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'super-category';


    protected function fillAttributeFromRequest(NovaRequest $request,
                                                $requestAttribute,
                                                $model,
                                                $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = array_map('intval', explode(',', $request[$requestAttribute]));
        }
    }
}
