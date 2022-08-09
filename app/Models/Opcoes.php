<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword ;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Opcoes extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $connection = 'mysql';
    protected $table = 'opcoes_enquete';
    protected $primaryKey = 'id_opcao';
    public $timestamps = true;
    protected $fillable = ['id_enquete', 'descricao'];

    public function apuracao()
    {
        return $this->belongsToMany(User::class,'apuracao','id_opcao','id_participante');
    }

}
