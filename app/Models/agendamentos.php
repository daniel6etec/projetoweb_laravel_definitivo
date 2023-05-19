<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendamentos extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

    protected $fillable = [
        'id',
        'nome',
        'telefone',
        'origem',
        'data_contato',
        'observacao',
    ];
    public $timestamps = false;

    protected $data_contato = ['data_contato'];
}
