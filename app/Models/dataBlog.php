<?php

namespace App\Models;

use App\Models\User;
use App\Models\dataBlogComments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dataBlog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function dataBlogComments(){
        return $this->hasMany(dataBlogComments::class);
    }
}
