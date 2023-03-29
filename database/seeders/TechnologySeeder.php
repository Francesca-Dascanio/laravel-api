<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Facade per Str
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserisco dati
        $technologies = [
            'HTML',
            'CSS',
            'Javascript',
            'PHP',
            'Laravel',
            'Vue.JS'
         ];


         // Inserisco dati in DB
         foreach ($technologies as $technology) {
             $singleTechnology = Technology::create([
                'name' => $technology,
                'slug' => Str::slug($technology)
             ]);
         }
    }
}


// ALERT: il comando php artisan db:seed --class=TechnologiesTableSeeder NON viene preso perchè non trova tabella (ma tabella esiste)