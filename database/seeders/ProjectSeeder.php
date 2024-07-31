<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $types = Type::all()->pluck("id");

        $projects = [
            [
                'title' => 'La Torre di Spellgard',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro e potenziamento delle difese magiche di una torre antica.',
                'image' => 'spellgard.jpg',
                'technologies' => 'Magia arcana, ingegneria dwarven',
                'client' => 'Arcimago Elminster',
                'author' => 'Halaster Blackcloak',
                'creation_date' => Carbon::create(1372, 5, 12),
            ],
            [
                'title' => 'Il Portale per Evermeet',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progetto di ricerca per stabilizzare un portale verso la patria elfica.',
                'image' => 'evermeet.jpg',
                'technologies' => 'Magia elfica, rune di teletrasporto',
                'client' => 'Regina Amlaruil',
                'author' => 'Elminster Aumar',
                'creation_date' => Carbon::create(1368, 8, 22),
            ],
            [
                'title' => 'Il Labirinto di Undermountain',
                'type_id' => $faker->randomElement($types),
                'description' => 'Mappatura e esplorazione del labirinto sotterraneo.',
                'image' => 'undermountain.jpg',
                'technologies' => 'Cartografia, incantesimi di rilevamento',
                'client' => 'Gilda degli Esploratori',
                'author' => 'Drizzt Do\'Urden',
                'creation_date' => Carbon::create(1354, 3, 1),
            ],
            [
                'title' => 'La Flotta di Luskan',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di nuove navi da guerra per la città portuale.',
                'image' => 'luskanfleet.jpg',
                'technologies' => 'Ingegneria navale, magia del vento',
                'client' => 'Capitano Deudermont',
                'author' => 'Taern "Cornuggia" Hornblade',
                'creation_date' => Carbon::create(1365, 10, 7),
            ],
            [
                'title' => 'Le Miniere di Mithral',
                'type_id' => $faker->randomElement($types),
                'description' => 'Ottimizzazione dell\'estrazione del prezioso metallo.',
                'image' => 'mithralmines.jpg',
                'technologies' => 'Macchinari nanici, incantesimi di rilevamento',
                'client' => 'Clan Ironfist',
                'author' => 'Baern "Occhiodipietra" Stonebrow',
                'creation_date' => Carbon::create(1358, 6, 18),
            ],
            [
                'title' => 'Il Tempio di Helm',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro e fortificazione del santuario del dio della protezione.',
                'image' => 'helmtemple.jpg',
                'technologies' => 'Architettura sacra, rune di protezione',
                'client' => 'Sommo Sacerdote di Helm',
                'author' => 'Khelben "Bastone Nero" Arunsun',
                'creation_date' => Carbon::create(1362, 1, 4),
            ],
            [
                'title' => 'L\'Accademia di Stregoni',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di incantesimi per gli studenti.',
                'image' => 'wizardacademy.jpg',
                'technologies' => 'Illusioni magiche, cristalli di memoria',
                'client' => 'Arcimago Theledorn',
                'author' => 'Mordenkainen',
                'creation_date' => Carbon::create(1360, 9, 15),
            ],
            [
                'title' => 'La Gilda dei Ladri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di un sistema di comunicazione segreto.',
                'image' => 'thievesguild.jpg',
                'technologies' => 'Linguaggi in codice, messaggi cifrati',
                'client' => 'Pasha Pook',
                'author' => 'Artemis Entreri',
                'creation_date' => Carbon::create(1367, 2, 13),
            ],
            [
                'title' => 'Il Circo di Volothamp',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo spettacolo acrobatico.',
                'image' => 'volothampcircus.jpg',
                'technologies' => 'Acrobazia, illusioni minori',
                'client' => 'Volothamp Geddarm',
                'author' => 'Fzoul Chembryl',
                'creation_date' => Carbon::create(1371, 7, 3),
            ],
            [
                'title' => 'La Fortezza di Sundabar',
                'type_id' => $faker->randomElement($types),
                'description' => 'Potenziamento delle difese contro gli attacchi dei giganti.',
                'image' => 'sundabarfortress.jpg',
                'technologies' => 'Fortificazioni, trappole meccaniche',
                'client' => 'Re Helmfast',
                'author' => 'Catti-brie',
                'creation_date' => Carbon::create(1369, 12, 20),
            ],
            [
                'title' => 'Il Santuario di Mielikki',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un giardino magico per la dea della natura.',
                'image' => 'mielikkishrine.jpg',
                'technologies' => 'Magia della natura, botanica',
                'client' => 'Alta Sacerdotessa di Mielikki',
                'author' => 'Jaheira',
                'creation_date' => Carbon::create(1366, 4, 28),
            ],
            [
                'title' => 'L\'Ordine del Guanto',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di nuove armature potenziate magicamente.',
                'image' => 'orderofthegauntlet.jpg',
                'technologies' => 'Forgiatura, incantesimi di protezione',
                'client' => 'Sir Isteval',
                'author' => 'Gromph Baenre',
                'creation_date' => Carbon::create(1359, 8, 5),
            ],
            [
                'title' => 'Il Clan Battlehammer',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un sistema di difesa per la fortezza nanica.',
                'image' => 'battlehammerclan.jpg',
                'technologies' => 'Ingegneria nanica, trappole meccaniche',
                'client' => 'Re Bruenor Battlehammer',
                'author' => 'Athrogate',
                'creation_date' => Carbon::create(1355, 2, 11),
            ],
            [
                'title' => 'La Torre di Ramazith',
                'type_id' => $faker->randomElement($types),
                'description' => 'Esplorazione della torre abbandonata di un potente mago.',
                'image' => 'ramazithtower.jpg',
                'technologies' => 'Disattivazione di trappole, decifrazione di rune',
                'client' => 'Gilda degli Avventurieri',
                'author' => 'Minsc',
                'creation_date' => Carbon::create(1373, 1, 9),
            ],
            [
                'title' => 'Il Pozzo dei Draghi',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un sistema di allerta per avvistamenti di draghi.',
                'image' => 'dragonwell.jpg',
                'technologies' => 'Cristalli di comunicazione, magia di divinazione',
                'client' => 'Consiglio di Neverwinter',
                'author' => 'Volothamp Geddarm',
                'creation_date' => Carbon::create(1364, 5, 23),
            ],
            [
                'title' => 'Il Mercato di Waterdeep',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di un\'app per la gestione delle merci.',
                'image' => 'waterdeepmarket.jpg',
                'technologies' => 'Linguaggi di programmazione, interfacce utente',
                'client' => 'Signori Mascherati',
                'author' => 'Khelben "Bastone Nero" Arunsun',
                'creation_date' => Carbon::create(1370, 8, 24),
            ],
            [
                'title' => 'La Gilda degli Avventurieri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un database di missioni e ricompense.',
                'image' => 'adventurersguild.jpg',
                'technologies' => 'Gestione dati, interfacce utente',
                'client' => 'Durnan',
                'author' => 'Volothamp Geddarm',
                'creation_date' => Carbon::create(1356, 7, 4),
            ],
            [
                'title' => 'Il Tempio di Tyr',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro degli affreschi raffiguranti il dio della giustizia.',
                'image' => 'tyrtemple.jpg',
                'technologies' => 'Restauro artistico, magia della luce',
                'client' => 'Sommo Sacerdote di Tyr',
                'author' => 'Storm Silverhand',
                'creation_date' => Carbon::create(1363, 9, 28),
            ],
            [
                'title' => 'La Scuola di Bardo',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di uno strumento musicale incantato.',
                'image' => 'bardschool.jpg',
                'technologies' => 'Liuteria, incantesimi di suono',
                'client' => 'Maestro Lelar',
                'author' => 'Danica Graysteel',
                'creation_date' => Carbon::create(1357, 4, 16),
            ],
            [
                'title' => 'La Torre dell\'Orologio',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo meccanismo per l\'orologio magico.',
                'image' => 'clocktower.jpg',
                'technologies' => 'Orologeria, magia del tempo',
                'client' => 'Consiglio di Waterdeep',
                'author' => 'Khelben "Bastone Nero" Arunsun',
                'creation_date' => Carbon::create(1361, 11, 8),
            ],
            [
                'title' => 'Il Palazzo di Neverwinter',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro dei giardini pensili del palazzo.',
                'image' => 'neverwinterpalace.jpg',
                'technologies' => 'Giardinaggio, magia della natura',
                'client' => 'Lord Neverember',
                'author' => 'Lady Aribeth de Tylmarande',
                'creation_date' => Carbon::create(1368, 3, 5),
            ],
            [
                'title' => 'La Fiera di Baldur\'s Gate',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un gioco interattivo per i visitatori.',
                'image' => 'baldursgatefair.jpg',
                'technologies' => 'Illusioni, meccanica',
                'client' => 'Duca Portyr',
                'author' => 'Imoen',
                'creation_date' => Carbon::create(1372, 9, 30),
            ],
            [
                'title' => 'La Gilda dei Mercanti',
                'type_id' => $faker->randomElement($types),
                'description' => 'Sviluppo di una rete di comunicazione commerciale.',
                'image' => 'merchantguild.jpg',
                'technologies' => 'Corrieri, messaggi cifrati',
                'client' => 'Lady Rylanthra',
                'author' => 'Xanathar',
                'creation_date' => Carbon::create(1360, 2, 2),
            ],
            [
                'title' => 'Il Tempio di Sune',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo altare per la dea della bellezza.',
                'image' => 'sunetemple.jpg',
                'technologies' => 'Scultura, magia della luce, pietre preziose',
                'client' => 'Somma Sacerdotessa di Sune',
                'author' => 'Leosin Erlanthar',
                'creation_date' => Carbon::create(1369, 6, 14),
            ],
            [
                'title' => 'La Scuola di Ladri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di furto per gli studenti.',
                'image' => 'thiefschool.jpg',
                'technologies' => 'Illusioni, meccanica, trappole',
                'client' => 'Gilda dei Ladri',
                'author' => 'Safana',
                'creation_date' => Carbon::create(1365, 1, 19),
            ],
            [
                'title' => 'La Torre di Zhentarim',
                'type_id' => $faker->randomElement($types),
                'description' => 'Infiltrazione e sabotaggio della base nemica.',
                'image' => 'zhentarimtower.jpg',
                'technologies' => 'Spionaggio, sabotaggio, incantesimi di occultamento',
                'client' => 'Arpisti',
                'author' => 'Laeral Silverhand',
                'creation_date' => Carbon::create(1371, 4, 5),
            ],
            [
                'title' => 'Il Pozzo di Silverymoon',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un sistema di purificazione dell\'acqua.',
                'image' => 'silverymoonwell.jpg',
                'technologies' => 'Ingegneria idraulica, magia dell\'acqua',
                'client' => 'Consiglio di Silverymoon',
                'author' => 'Alustriel Silverhand',
                'creation_date' => Carbon::create(1359, 7, 27),
            ],
            [
                'title' => 'Il Mercato di Scornubel',
                'type_id' => $faker->randomElement($types),
                'description' => 'Progettazione di un nuovo sistema di illuminazione.',
                'image' => 'scornubelmarket.jpg',
                'technologies' => 'Lampade magiche, cristalli luminosi',
                'client' => 'Gilda dei Mercanti di Scornubel',
                'author' => 'Maegera "Noctiluca" Brightlock',
                'creation_date' => Carbon::create(1373, 3, 12),
            ],
            [
                'title' => 'La Gilda degli Artigiani',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un catalogo online dei prodotti.',
                'image' => 'artisanguild.jpg',
                'technologies' => 'Web design, e-commerce',
                'client' => 'Gilda degli Artigiani di Waterdeep',
                'author' => 'Larloch',
                'creation_date' => Carbon::create(1370, 10, 3),
            ],
            [
                'title' => 'Il Tempio di Gond',
                'type_id' => $faker->randomElement($types),
                'description' => 'Restauro della statua del dio della forgiatura.',
                'image' => 'gondtemple.jpg',
                'technologies' => 'Scultura, metallurgia, magia della terra',
                'client' => 'Sommo Sacerdote di Gond',
                'author' => 'Adbar',
                'creation_date' => Carbon::create(1366, 8, 9),
            ],
            [
                'title' => 'La Scuola di Guerrieri',
                'type_id' => $faker->randomElement($types),
                'description' => 'Creazione di un simulatore di combattimento.',
                'image' => 'warriorschool.jpg',
                'technologies' => 'Illusioni magiche, costrutti animati',
                'client' => 'Ordine del Drago Purpureo',
                'author' => 'Sir Isteval',
                'creation_date' => Carbon::create(1370, 1, 25),
            ],
            [
                'title' => 'La Spada di Drizzt',
                'type_id' => $faker->randomElement($types),
                'description' => 'Forgiatura di una spada leggendaria per un ranger drow.',
                'image' => 'drizzt.jpg',
                'technologies' => 'Metalli rari, magia drow',
                'client' => 'Drizzt Do\'Urden',
                'author' => 'Bruenor Battlehammer',
                'creation_date' => Carbon::create(1356, 11, 2),
            ],
        ];

        foreach ($projects as $project){
            Project::create($project);
        }

    }
}
