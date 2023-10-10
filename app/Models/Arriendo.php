<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arriendo extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'arriendos';

    protected $fillable = ['name', 'surname', 'lastname', 'rut', 'patent', 'email', 'Entrega', 'Devolucion'];

    public function vehicles () {
        return $this->belongsTo(Vehicle::class, 'patent');
    }
}
