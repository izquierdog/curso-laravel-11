<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['*'];
    /*
    protected $fillable = [
        'user_id',
        'text',
    ];
    protected $hidden = [
        'user_id',
    ];
*/
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        //de Comment user_id con id de User.
    }
}
