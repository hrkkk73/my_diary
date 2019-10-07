<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'contents',
        'writing_time'
    ];

    public function scopeGetByUserId($query, $id)
    {
        return $query->where('user_id', $id);
    }

    public function scopeGetBySearchMonth($query, $searchMonth)
    {
        return $query->where('writing_time', 'LIKE', "$searchMonth%");
    }

    public function getDiaryList($id, $searchMonth)
    {
        return $this->getByUserId($id)
                    ->getBySearchMonth($searchMonth)
                    ->get();
    }
}
