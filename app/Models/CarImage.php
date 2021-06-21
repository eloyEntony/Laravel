<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImage extends Model
{
    use HasFactory;
    protected $table = 'car_images';

    public function Car()
    {
        return $this->belongsTo(Car::class, "id_car");
    }

    protected $fillable = [
        'name'
    ];
}
