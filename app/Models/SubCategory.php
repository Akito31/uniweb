<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='sub_categories';
    protected $fillable=[
        'name',
        'image',
        'category_id',
        'description'
    ];
}
