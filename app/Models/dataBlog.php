<?php

namespace App\Models;

use App\Models\User;
use App\Models\dataBlogComments;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dataBlog extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dataBlogComments(){
        return $this->hasMany(dataBlogComments::class);
    }
}
