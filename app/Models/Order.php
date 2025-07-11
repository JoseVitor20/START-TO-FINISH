<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'amount', 'status', 'refunded', 'stripe_session_id', 'product_id', 'stripe_payment_intent_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function refunds()
    {
        return $this->hasMany(Refund::class);
    }

    public function isRefunded(): bool
    {
        return $this->refunded || $this->refunds()->where('status', 'processed')->exists();
    }
}