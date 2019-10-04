<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = ['user_id', 'title', 'contents', 'writing_time'];

    public function getByUserId($id)
    {
        return $this->where('user_id', $id)->get();
    }
}
