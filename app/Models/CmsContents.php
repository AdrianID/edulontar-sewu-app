<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsContents extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'content',
        'image',
        'type_id'
    ];
}
