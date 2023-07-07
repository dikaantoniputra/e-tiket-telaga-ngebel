<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function boking()
    {
        return $this->hasOne(Boking::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function profile()
    {
        return $this->BelongsTo(DetailUser::class);
    }

}
