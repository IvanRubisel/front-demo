<?php

namespace App\Front\Resources;

use WeblaborMx\Front\Inputs\ID;
use WeblaborMx\Front\Inputs\Text;
use App\Models\Book as Model;
use App\Front\Resources\Resource;
use WeblaborMx\Front\Inputs\BelongsTo;
use WeblaborMx\Front\Inputs\Boolean;
use WeblaborMx\Front\Inputs\Code;
use WeblaborMx\Front\Inputs\Date;
use WeblaborMx\Front\Inputs\HasMany;
use WeblaborMx\Front\Inputs\Image;
use WeblaborMx\Front\Inputs\Money;
use WeblaborMx\Front\Inputs\Number;
use WeblaborMx\Front\Inputs\Select;
use WeblaborMx\Front\Inputs\Textarea;

class Book extends Resource
{
    public $base_url = '/admin/books';
    public $model = Model::class;
    public $title = 'title';

    public function fields()
    {
        return [
            ID::make(),
            Text::make('Title'),
            Textarea::make('Description'),
            Image::make('image'),
            Date::make('Publication_date'),
            Select::make('gender')->options([
                'ficcion' => 'Ficcion',
                'fantasia' => 'Fantacia',
                'misterio' => 'Misterio',
                'romantica' => 'Romantica',
            ]),
            Number::make('Edition'),
            Money::make('Price'),
            BelongsTo::make('Author'),
            // HasMany::make('Author'),
            Boolean::make('Available')->default(false),
        ];
    }
}
