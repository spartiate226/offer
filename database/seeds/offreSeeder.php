<?php

use App\categorie;
use App\domaine;
use App\localite;
use App\sect__activite;
use App\secteur;
use App\structure;
use Illuminate\Database\Seeder;

class offreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(categorie::class)->create();
        factory(localite::class)->create();
        factory(localite::class)->create(['nom'=>"Bobo"]);
        factory(domaine::class)->create();
        factory(structure::class)->create();
        factory(structure::class)->create(["nom"=>" Pathfinder International"]);
        factory(secteur::class)->create();
        factory(secteur::class)->create(['nom'=>'publique']);
    }
}
