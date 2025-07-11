<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

// app/Models/Refund.php

protected $fillable = [
    'user_id', 
    'order_id', 
    'product_id',
    'justification', 
    'status'
];
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}