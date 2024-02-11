<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Consultation extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'consultation';

    protected $dates =[
        'created_at',
        'updated_at',
        'deleted_at',
    ]

    protected $filllable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
