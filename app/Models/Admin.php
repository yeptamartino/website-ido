<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "users";
    protected $guarded = [];
}
