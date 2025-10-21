<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    use HasFactory;
    protected $table = 'tag';
    protected $primaryKey = 'id_tag';
    protected $fillable = ['tag'];

    public function buku(){
        return $this->belongsToMany
        ("App\Models\Tag","tag_buku","id_tag","id_buku");
    }
}
