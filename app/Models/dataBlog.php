<?php

namespace App\Models;

use App\Models\User;
use App\Models\dataBlogComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class dataBlog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dataBlogComments()
    {
        return $this->hasMany(dataBlogComments::class);
    }
}
