<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arriendo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'arriendos';

    protected $fillable = ['id', 'name', 'surname', 'lastname', 'rut', 'patent', 'email', 'entrega', 'devolucion'];

    public function vehicles () {
        return $this->belongsTo(Vehicle::class, 'patent', 'id');
    }
}
