<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationalStructure extends Model
{
    protected $dates =['deleted_at'];

    protected $table = "organizational_structures";
    protected $guarded = [];
}
