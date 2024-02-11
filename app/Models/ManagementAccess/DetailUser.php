<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DetailUser extends Model
{
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates =[
        'created_at',
        'updated_at',
        'deleted_at',
    ]

    protected $filllable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}