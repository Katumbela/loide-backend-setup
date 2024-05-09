<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mes extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_mes';
    public $incrementing = true;

    protected $fillable = [
        'cod_mes',
        'descricao',
    ];


    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function propinas()
    {
        return $this->hasMany(Propina::class, 'cod_mes', 'cod_mes');
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
