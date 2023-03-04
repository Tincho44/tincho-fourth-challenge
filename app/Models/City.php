<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
}

// Ciudades has many fligts y airlines | no hay belongs
// Vuelos belongs to airlines y tiene 2 belongs to -> una ciudad de origen y otra de destino , tengo id de donde llega a donde sale
// origen y destino ids en las columnas de flights
// Airline tiene hasmany flights, pertenecen a ciudades
