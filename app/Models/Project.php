<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        // Inserisci colonne che possono essere migrate tutte insieme
        'title',
        'slug',
        'year',
        'description',
        'img',
        'type_id'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class);
    }

    protected $appends = [
        'full_img_path'
    ];

    public function getFullImgPathAttribute()
    {
        $fullPath = null;

        if ($this->img) {
            $fullPath = asset('storage/'.$this->img);
        }

        return $fullPath;
    }

}
