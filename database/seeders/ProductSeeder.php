<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //stadsfietsen
        Product::create([
            'name' => 'Oranje',
            'slug' => 'oranje',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 650,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Esprix',
            'slug' => 'esprix',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 550,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'PureNL',
            'slug' => 'purenl',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Urban',
            'slug' => 'urban',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 800,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Finesse',
            'slug' => 'finesse',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 720,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Mark IV',
            'slug' => 'mark4',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 5,
        ]);

        //mountainbikes
        Product::create([
            'name' => 'Y-Caliber 3',
            'slug' => 'ycaliber',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1000,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Ironhead',
            'slug' => 'ironhead',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 900,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Klauw 2',
            'slug' => 'klauw',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1100,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 7,
        ]);

        Product::create([
            'name' => 'Merlijn 3',
            'slug' => 'merlijn',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1200,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Schaal 2021',
            'slug' => 'schaal',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1050,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'ProCaliber 3.91',
            'slug' => 'procaliber',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1100,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 5,
        ]);

        //racefietsen
        Product::create([
            'name' => 'Latina SPB',
            'slug' => 'latina',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1500,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Axiaal Quick',
            'slug' => 'axiaalq',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1450,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Zwever',
            'slug' => 'zwever',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1300,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Axiaal Slow',
            'slug' => 'axiaals',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 2000,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Skunst 21',
            'slug' => 'skunst',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1900,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Noach -2000',
            'slug' => 'noach',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 1619,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 6,
        ]);

        //E-bikes
        Product::create([
            'name' => 'Roma 763',
            'slug' => 'roma',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 3000,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Lissabon 4',
            'slug' => 'lissabon',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 4000,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Praha 1',
            'slug' => 'praha',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 3800,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Bucharest 20',
            'slug' => 'bucharest20',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 2500,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Bucharest 19',
            'slug' => 'bucharest19',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 2200,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Bratislava',
            'slug' => 'bratislava',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 2100,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 5,
        ]);

        //kinderfietsen
        Product::create([
            'name' => 'Nippon',
            'slug' => 'nippon',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 100,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Zhongguo',
            'slug' => 'zhongguo',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 110,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Siam',
            'slug' => 'siam',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 120,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Myanmar',
            'slug' => 'myanmar',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 60,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Indonesia',
            'slug' => 'indonesia',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 75,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Malaysia',
            'slug' => 'malaysia',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 90,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 6,
        ]);

        //accesoires
        Product::create([
            'name' => 'Telefoonhouder',
            'slug' => 'telefoonhouder',
            'description' => 'Deze praktische universele fietshouder is eenvoudig te bevestigen op elk fietsstuur. Op deze manier kun je tijdens het fietsen gebruik maken van navigatie, smartphone of MP4-speler. Handig, betrouwbaar en makkelijk in gebruik.',
            'price' => 50,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 7,
        ]);

        Product::create([
            'name' => 'Gelzadel',
            'slug' => 'gelzadel',
            'description' => 'Dit fietszadel is 100% Waterdicht en heeft een speciale gepatenteerde D2 (staat voor Double Density dat betekend dubbele dichtheid) opbouw. ',
            'price' => 40,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Fietstas',
            'slug' => 'fietstas',
            'description' => 'Onverwoestbaar, Sportief design, Volledig waterdicht en Supereenvoudig in gebruik. Deze nieuwe Fietstas combineert maximale duurzaamheid met een lekker sportief design én alledaags gebruiksgemak.',
            'price' => 25,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Kabelslot',
            'slug' => 'kabelslot',
            'description' => 'Dit is een ketting voor dagelijks gebruik, uitermate geschikt om uw fiets kort tot middellang te parkeren of om als tweede slot te gebruiken.',
            'price' => 15,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Fietspomp',
            'slug' => 'fietspomp',
            'description' => 'Deze fietspomp is een echte Nederlandse klassieker. Deze kwaliteitspomp wordt al ruim 55 jaar gemaakt door de sociale werkplaats Presikhaaf.',
            'price' => 20,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Fietskrat',
            'slug' => 'fietskrat',
            'description' => 'Fietskrat: als je er eenmaal een hebt, kan je niet meer zonder.',
            'price' => 19,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 4,
        ]);

    }
}
