<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable=['name','popular'];
    use HasFactory;
    public function posts(): belongsToMany
    {
        return $this->belongsToMany(Post::class);
    }
    public function getRouteKeyName(): string
    {
        return 'name';
    }
}
