<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class news5 extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $table = 'news5';
    protected $dates = ['deleted_at'];

    public function authors()
    {
        return $this->belongsToMany(Authors::class, 'author_news', 'author_id', 'news_id');
    }
}
