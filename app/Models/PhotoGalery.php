<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoGalery extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "photo_galeries";
    protected $guarded = [];
}
