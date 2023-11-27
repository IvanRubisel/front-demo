<?php

namespace App\Front\Resources;

use WeblaborMx\Front\Inputs\ID;
use App\Models\AuthorBook as Model;
use App\Front\Resources\Resource;
use WeblaborMx\Front\Inputs\BelongsToMany;
use WeblaborMx\Front\Inputs\Checkboxes;
use WeblaborMx\Front\Inputs\Number;
use WeblaborMx\Front\Inputs\Trix;

class AuthorBook extends Resource
{
    public $base_url = '/admin/author_books';
    public $model = Model::class;
    public $title = 'id';

    public function fields()
    {
        return [
            ID::make(),
            // BelongsToMany::make('Author')->enableMassive(),
            // BelongsToMany::make('Book')->enableMassive(),
            Trix::make('contribution'),
            Checkboxes::make('Role')->options([
                'propio' => 'Propio',
                'autor_principal' => 'Autor principal',
                'coauto' => 'coauto',
                'editor' => 'editor',
            ]),
            Number::make('quantity_pages_contributed'),

        ];
    }
}
