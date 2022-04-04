<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  protected $fillable = [
    'content',
    'created_at',
    'updated_at',
  ];
}