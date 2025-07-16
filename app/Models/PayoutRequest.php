<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PayoutRequest extends Model
{
    protected $fillable = ['seller_id', 'amount', 'method', 'note', 'status'];

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }
}
