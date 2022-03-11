<?php

namespace App\Models;

use App\Http\Traits\Queries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory, Queries;
    protected $table = 'programs';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['id', 'name', 'image', 'content', 'slug'];
}
