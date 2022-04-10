<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $guarded=[''];

    public function folder()
    {
        return $this->belongsTo(Folder::class,'folder_id','id');
    }
}
