<?php

namespace App\Models;


class MBPosts extends CoreModel
{

    protected $table = 'mb_posts';

    protected $fillable = ['id', 'user_id', 'resource_id', 'title', 'description', 'link'];


}