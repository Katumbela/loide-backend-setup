<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_curso';
    public $incrementing = true;
    protected $fillable = [
        'cod_curso',
        'descricao',
        'tipo_curso',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function matriculas()
    {
        return $this->hasMany(Matricula::class, 'cod_curso', 'cod_curso');
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
