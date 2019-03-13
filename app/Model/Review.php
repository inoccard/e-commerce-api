<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // relacionamento um para muitos
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
