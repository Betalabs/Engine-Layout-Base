<?php

namespace EngineLayoutBase\App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'depth', 'category_parent_id'];

    public function children()
    {
        return $this->hasMany(Category::class, 'category_parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_parent_id');
    }

    public function urls()
    {
        return $this->morphMany(Url::class, 'urlable');
    }
}
