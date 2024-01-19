<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id',];

    protected $fillable = ['category_id','first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail'];


    public function getDetail() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getCustomColumnAttribute()
    {
        $mapping = [
            1 => '男性',
            2 => '女性',
            3 => 'その他'
        ];

        return $mapping[$this->attributes['gender']];
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function scopeKeywordSearch ($query, $keyword)
    {
        if (!empty($keyword)) {
            $query->where('email', 'like', '%' . $keyword . '%')
            ->orWhere('first_name', 'like', '%' . $keyword . '%')
            ->orWhere('last_name', 'like', '%' . $keyword . '%');
        }
    }
    public function scopeGenderSearch($query, $gender)
    {
        if ($gender !== '0') {
            $query->where('gender', $gender);
        }
    }
    public function scopeCategorySearch($query, $category_id)
    {
        if(!empty($category_id)) {
            $query->where('category_id', $category_id);
        }
    }
    public function scopeDateSearch($query, $date)
    {
        if(!empty($date)) {
            $query->whereDate('created_at', $date);
        }
    }

}