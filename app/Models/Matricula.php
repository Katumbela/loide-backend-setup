<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $primaryKey = 'n_matricula';
    public $incrementing = true;

    protected $fillable = [
        'cod_curso',
        'cod_aluno',
        'data',
        'cod_periodo'
    ];


    protected $hidden = [
        'updated_at',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'cod_aluno', 'cod_aluno');
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
        return $this->hasMany(Propina::class, 'n_matricula', 'n_matricula');
    }

    public function mes()
    {
        return $this->belongsTo(Mes::class, 'cod_mes', 'cod_mes');
    }


    public function getJWTCustomClaims()
    {
        return [];
    }
}
