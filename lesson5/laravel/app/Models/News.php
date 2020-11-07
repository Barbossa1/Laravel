<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = "news";

    public function getAllNews()
    {
        return DB::table($this->table)->get();
    }

    public function getNewsBySlug(string $slug)
    {
        return DB::table($this->table)->where(['slug' => $slug])->first();
    }
}
