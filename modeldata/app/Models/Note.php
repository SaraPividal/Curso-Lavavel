<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    // Decirle el nombre de la tabla si no hemos respetado convenio
    protected $table = "notes";

    // Indicar los campos que pueden ser cumplimentados por si no queremos que se pueda manipular alguno
    protected $fillable= [
        'title', 
        'description', 
        'deadline',
        'done'
    ];

    // Los campos que se protegen de ser editados NO HACE FALTA COMPLETAR LOS GUARDED Y FILLABLE YA QUE SON LOS CONTRARIOS
    // protected $guarded = [
    //     'id'
    // ]

    // Para castear datos, es decir, cuando creamos diferentes notas forzamos el casting en los campos por ejemplo forzar casting fecha
    protected $casts = [
        "deadline" => 'date'
    ];

    // Evita que se entreguen datos cuando estos no deben de ser entregados por ejemplo, no enviar un password cuando pidan datos de usuario
    // protected $hidden = [
    //     'password'
    // ]





}
