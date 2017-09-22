<?php

namespace App\Models;


class MBVotes extends CoreModel
{

    protected $table = 'mb_votes';

    protected $fillable = ['id', 'like','post_id', 'user_id'];


}