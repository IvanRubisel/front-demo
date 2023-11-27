<?php

namespace App\Front\Resources;

use WeblaborMx\Front\Inputs\ID;
use WeblaborMx\Front\Inputs\Text;
use App\Models\Author as Model;
use App\Front\Resources\Resource;
use WeblaborMx\Front\Inputs\Date;
use WeblaborMx\Front\Inputs\HasMany;
use WeblaborMx\Front\Inputs\Number;
use WeblaborMx\Front\Inputs\Password;
use WeblaborMx\Front\Inputs\Select;
use WeblaborMx\Front\Inputs\Time;

class Author extends Resource
{
    public $base_url = '/admin/authors';
    public $model = Model::class;
    public $title = 'name';
    public $options = [];

    public function fields()
    {
        return [
            ID::make(),
            Text::make('Name')->rules('required'),
            Number::make('Age')->rules('required'),
            Number::make('Number')->rules('required'),
            Text::make('Email')->rules('required'),
            Password::make('Password')->rules('required'),
            Select::make('Gender')->options([
                'masculino' => 'Masculino',
                'femenino' => 'Femenino'
            ]),
            Text::make('City')->rules('required'),
            Time::make('creation_time')->rules('required'),
            Text::make('nationality')->rules('required'),
        ];
    }
}
