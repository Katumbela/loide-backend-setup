<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;
    protected $primaryKey = 'cod_periodo';
    public $incrementing = true;

    protected $fillable = [
        'cod_periodo',
        'descricao',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'cod_periodo', 'cod_periodo');
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
