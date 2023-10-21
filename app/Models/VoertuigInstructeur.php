<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class VoertuigInstructeur extends Model
{
    use HasFactory;

    protected $fillable = [
        'InstructeurId'
    ];

    public function scopeListGegevens(Builder $information): void
    {
        $information
            ->select('*')
            ->join('voertuigs', 'voertuig_instructeurs.VoertuigId', '=', 'voertuigs.Id')
            ->join('instructeurs', 'voertuig_instructeurs.InstructeurId', '=', 'instructeurs.Id')
            ->join('type_voertuigs', 'voertuigs.TypeVoertuigId', '=', 'type_voertuigs.Id')
            ->get();
    }
}
