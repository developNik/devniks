<?php

namespace Devniks\BlogCurd\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model {
    use HasFactory, SoftDeletes;

    protected $table = 'blogs';

    protected $fillable = ['title', 'content'];

    protected $dates = ['deleted_at'];
}
