<?php

namespace App\Models;


class MBComments extends CoreModel
{

    protected $table = 'mb_comments';

    protected $fillable = ['id', 'comment','post_id', 'user_id'];


}