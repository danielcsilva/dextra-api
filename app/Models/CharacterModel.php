<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'modified',
        'resourceURI',
        'urls',
        'thumbnail',
        'comics',
        'stories',
        'events',
        'series'];

}
