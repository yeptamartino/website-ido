<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "sliders";
    protected $guarded = [];
}
