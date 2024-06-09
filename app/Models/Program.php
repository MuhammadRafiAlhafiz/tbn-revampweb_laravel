<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Mendefinisikan hubungan dengan tiket
    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Menangani event created
        static::created(function ($program) {
            // Buat entri tiket baru
            $program->tickets()->create([
                'no_ticket' => 'YourDefaultValue', // Isi dengan nilai default
                'place' => 'YourDefaultValue', // Isi dengan nilai default
                'date' => 'YourDefaultValue', // Isi dengan nilai default
                'type' => 'YourDefaultValue', // Isi dengan nilai default
                'name' => 'YourDefaultValue', // Isi dengan nilai default
                // Isi kolom lainnya sesuai kebutuhan
            ]);
        });
    }
}
