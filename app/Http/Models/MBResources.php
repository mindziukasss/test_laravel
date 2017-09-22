<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MBResources extends CoreModel
{
    protected $table = 'mb_resources';

    protected $fillable = ['id', 'path', 'mime_type', 'size', 'width', 'height'];
}