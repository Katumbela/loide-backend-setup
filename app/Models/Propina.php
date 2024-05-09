<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propina extends Model
{
    use HasFactory;


    protected $primaryKey = 'cod_propina';
    public $incrementing = true;
    protected $fillable = [
        'valor',
        'data',
        'n_matricula',
        'cod_mes',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function matricula()
    {
        return $this->belongsTo(Matricula::class, 'n_matricula', 'n_matricula');
    }

    public function mes()
    {
        return $this->belongsTo(Mes::class, 'cod_mes', 'cod_mes');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
