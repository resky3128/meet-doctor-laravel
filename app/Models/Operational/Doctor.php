<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Doctor extends Model
{
    //use HasFactory;
    use SoftDeletes;

    public $table = 'doctor';

    protected $dates =[
        'created_at',
        'updated_at',
        'deleted_at',
    ]

    protected $filllable = [
        'specialist_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
