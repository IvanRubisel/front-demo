<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;


class Author extends Model
{
    use SearchableTrait, SoftDeletes, LogsActivity;

    protected $guarded = [];
    protected $searchable = [
        'columns' => [
            'name' => 10,
        ],
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logUnguarded();
    }
    /*
     * Relationships
     */
}
