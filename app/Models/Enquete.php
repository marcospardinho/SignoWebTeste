<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword ;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Enquete extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $connection = 'mysql';
    protected $table = 'enquetes';
    protected $primaryKey = 'id_enquete';
    public $timestamps = true;
    protected $fillable = ['id_user','titulo', 'descricao' , 'inicio', 'fim', 'status'];

    public function opcoes()
    {
        return $this->hasMany(Opcoes::class,'id_enquete','id_enquete');
    }

    public function apuracao()
    {
        return $this->belongsToMany(User::class,'apuracao','id_enquete','id_participante');
    }

    public function participantes()
    {
        return $this->hasMany(User::class,'id_enquete','id_enquete');
    }

}
