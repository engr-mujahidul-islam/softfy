<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVersion extends Model
{
    protected $fillable = ['product_id', 'version_number', 'changelog', 'file_path', 'released_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'version_id');
    }
}
