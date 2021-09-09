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
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Esprix',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'PureNL',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Urban',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Finesse',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Mark IV',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 5,
        ]);

        //mountainbikes
        Product::create([
            'name' => 'Y-Caliber 3',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Ironhead',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Klauw 2',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 7,
        ]);

        Product::create([
            'name' => 'Merlijn 3',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Schaal 2021',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'ProCaliber 3.91',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 5,
        ]);

        //racefietsen
        Product::create([
            'name' => 'Latina SPB',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Axiaal Quick',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Zwever',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Axiaal Slow',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Skunst 21',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Noach -2000',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 6,
        ]);

        //E-bikes
        Product::create([
            'name' => 'Roma 763',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Lissabon 4',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Praha 1',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Bucharest 20',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Bucharest 19',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Bratislava',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 5,
        ]);

        //kinderfietsen
        Product::create([
            'name' => 'Nippon',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Zhongguo',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Siam',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Myanmar',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Indonesia',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Malaysia',
            'description' => 'Deze allrounder in comfortabel fietsen is al decennia onze trots. De perfecte fiets voor zowel je dagelijkse rit als een mooie tocht door heuvelachtig terrein.',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 6,
        ]);

        //accesoires
        Product::create([
            'name' => 'Telefoonhouder',
            'description' => 'Deze praktische universele fietshouder is eenvoudig te bevestigen op elk fietsstuur. Op deze manier kun je tijdens het fietsen gebruik maken van navigatie, smartphone of MP4-speler. Handig, betrouwbaar en makkelijk in gebruik.',
            'price' => 50,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 7,
        ]);

        Product::create([
            'name' => 'Gelzadel',
            'description' => 'Dit fietszadel is 100% Waterdicht en heeft een speciale gepatenteerde D2 (staat voor Double Density dat betekend dubbele dichtheid) opbouw. ',
            'price' => 40,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Fietstas',
            'description' => 'Onverwoestbaar, Sportief design, Volledig waterdicht en Supereenvoudig in gebruik. Deze nieuwe Fietstas combineert maximale duurzaamheid met een lekker sportief design én alledaags gebruiksgemak.',
            'price' => 25,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Kabelslot',
            'description' => 'Dit is een ketting voor dagelijks gebruik, uitermate geschikt om uw fiets kort tot middellang te parkeren of om als tweede slot te gebruiken.',
            'price' => 15,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Fietspomp',
            'description' => 'Deze fietspomp is een echte Nederlandse klassieker. Deze kwaliteitspomp wordt al ruim 55 jaar gemaakt door de sociale werkplaats Presikhaaf.',
            'price' => 20,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Fietskrat',
            'description' => 'Fietskrat: als je er eenmaal een hebt, kan je niet meer zonder.',
            'price' => 19,
            'vat' => 1.21,
            'category_id' => 6,
            'manufacturer_id' => 4,
        ]);

    }
}
