<?php

namespace EngineLayoutBase\App\Models;


use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    protected $fillable = ['url', 'urlable_id', 'urlable_type'];

    public function urlable()
    {
        return $this->morphTo();
    }
}
