<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
//    protected $fillable = ['title','author','description', 'user_id'];

    public function user() : belongsTo {
        return $this->belongsTo(User::class);
    }
}
