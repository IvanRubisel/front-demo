<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Book extends Model
{
    use SearchableTrait, SoftDeletes, LogsActivity;

    protected $guarded = [];
    protected $searchable = [
        'columns' => [
            'name' => 10,
        ],
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
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
