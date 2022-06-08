<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    protected $connection = 'webbayDB';
    protected $collection = 'templates';
    
    protected $fillable = [
        'templateId', 'sections','templateTag'
    ];
}
