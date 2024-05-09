<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $primaryKey = 'cod_aluno';
    public $incrementing = true;
    protected $fillable = [
        'cod_aluno',
        'nome',
        'bi',
        'data_nascimento',
        'genero',
        'morada',
        'telefone'
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
        return $this->hasMany(Matricula::class, 'cod_aluno', 'cod_aluno');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cod_curso', 'cod_curso');
    }

    public function periodo()
    {
        return $this->belongsTo(Periodo::class, 'cod_periodo', 'cod_periodo');
    }

    public function propinas()
    {
        return $this->belongsTo(Propina::class, 'n_matricula', 'n_matricula');
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}