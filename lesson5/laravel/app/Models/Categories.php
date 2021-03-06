<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categories extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function getAllCategories()
    {
        return DB::table($this->table)->get();
    }

    public function getCategoriesByID(int $id)
    {
        return DB::table($this->table)->where(['id' => $id])->first();
    }
}
