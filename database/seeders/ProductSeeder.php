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
            'description' => 'Robuuste allrounder waarmee je echt alles kan vervoeren. Perfect voor moeders én vaders!',
            'price' => 550,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'PureNL',
            'slug' => 'purenl',
            'description' => 'Sportieve allround stadsfiets waarmee je gezien mag worden',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Urban',
            'slug' => 'urban',
            'description' => 'Dé next generation transportfiets met 3 versnellingen, kan wel tegen een stootje',
            'price' => 800,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Finesse',
            'slug' => 'finesse',
            'description' => 'Robuuste allround transportfiets die wel tegen een stootje kan',
            'price' => 720,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Mark IV',
            'slug' => 'mark4',
            'description' => 'Een ware allrounder met superstabiel frame! De fiets van het jaar 2020!',
            'price' => 600,
            'vat' => 1.21,
            'category_id' => 1,
            'manufacturer_id' => 5,
        ]);

        //mountainbikes
        Product::create([
            'name' => 'Y-Caliber 3',
            'slug' => 'ycaliber',
            'description' => 'Het lichtgewicht aluminium frame heeft niet alleen een uitgebalanceerde uitrusting die het comfort biedt dat nodig is voor in het begin, maar siert zichzelf ook met een sportief, fris en tegelijkertijd tijdloos design.',
            'price' => 1000,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Ironhead',
            'slug' => 'ironhead',
            'description' => 'Een zeer goede fiets voor een schappelijke prijs. De afmontage is goed en de 1x12 aandrijflijn laat niets te wensen over.',
            'price' => 900,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Klauw 2',
            'slug' => 'klauw',
            'description' => 'Klimt als een XC-bike en daalt als een downhiller dankzij de afstelbare geometrie en suspensiekinematica.',
            'price' => 1100,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 7,
        ]);

        Product::create([
            'name' => 'Merlijn 3',
            'slug' => 'merlijn',
            'description' => 'Met een gebalanceerde geometrie en zorgvuldig samengestelde afmontage is de Merlijn een uitstekende introductie in de mountainbikesport.',
            'price' => 1200,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Schaal 2021',
            'slug' => 'schaal',
            'description' => 'Een droomfiets in de puurste zin van het woord. Met zijn premium carbon onderdelen en intelligente, draadloos verbonden en via de app configureerbare onderdelen.',
            'price' => 1050,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'ProCaliber 3.91',
            'slug' => 'procaliber',
            'description' => 'Een moderne mountainbike met een uitstekende afmontage. De Procaliber biedt alles wat je nodig hebt om off-road de mooiste plekjes te gaan ontdekken.',
            'price' => 1100,
            'vat' => 1.21,
            'category_id' => 2,
            'manufacturer_id' => 5,
        ]);

        //racefietsen
        Product::create([
            'name' => 'Latina SPB',
            'slug' => 'latina',
            'description' => 'De Latina SPB is een racefiets van topkwaliteit. Met zijn lichte en strak uitziende frame en hoogwaardige Shimano onderdelen is deze racefiets de beste keus',
            'price' => 1500,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Axiaal Quick',
            'slug' => 'axiaalq',
            'description' => 'Deze lichte aluminium racefiets met carbon voorvork en met mechanische schijfremmen is perfect als je een leuke allround racefiets zoekt waar je lang mee vooruit kan.',
            'price' => 1450,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Zwever',
            'slug' => 'zwever',
            'description' => 'Voordelig geprijsde crosshybride met 21 versnellingen. verende voorvork en mechanische schijfremmen, een ideale fiets voor de beginnende fietser.',
            'price' => 1300,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Axiaal Slow',
            'slug' => 'axiaals',
            'description' => 'We hebben deze racefiets ontwikkeld en getest voor regelmatige ritten. De fiets voelt zo comfortabel dat je steeds vaker en verder wilt rijden.',
            'price' => 2000,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Skunst 21',
            'slug' => 'skunst',
            'description' => 'We hebben deze racefiets ontwikkeld en getest voor regelmatige ritten. De fiets voelt zo comfortabel dat je steeds vaker en verder wilt rijden.',
            'price' => 1900,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Noach -2000',
            'slug' => 'noach',
            'description' => 'Wanneer je zoekt naar een instapmodel met veel waar voor je geld, dan is dit de racefiets voor jou!',
            'price' => 1619,
            'vat' => 1.21,
            'category_id' => 3,
            'manufacturer_id' => 6,
        ]);

        //E-bikes
        Product::create([
            'name' => 'Roma 763',
            'slug' => 'roma',
            'description' => 'De Roma 763 is dé elektrische stadsfiets voor iedereen! De AMIGO E-Active is een stevige, betrouwbare en vooral ook betaalbare elektrische fiets.',
            'price' => 3000,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Lissabon 4',
            'slug' => 'lissabon',
            'description' => 'De Lissabon is ontdaan van alles wat niet noodzakelijk is. Een vrij minimalistisch fiets dus waarvan je vrijwel alle onderdelen op elke hoek van de straat kunt kopen.',
            'price' => 4000,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 8,
        ]);

        Product::create([
            'name' => 'Praha 1',
            'slug' => 'praha',
            'description' => 'Praha 1 biedt een zeer ruime keuze in versnellingen, is nauwkeurig en betrouwbaar en heerlijk om te hebben als je net even wat meer kilometers maakt',
            'price' => 3800,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 6,
        ]);

        Product::create([
            'name' => 'Bucharest 20',
            'slug' => 'bucharest20',
            'description' => 'Op de Bucharest 20 rijd jij zonder zorgen rond! De Bucharest 20 is een stevige, betrouwbare en vooral ook betaalbare elektrische fiets.',
            'price' => 2500,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Bucharest 19',
            'slug' => 'bucharest19',
            'description' => 'Snelle e-bike met lichtgewicht aluminium frame met zeer krachtige Specialized 1.2 S motor (90Nm) en 600Wh accu. Voorzien van hydraulische schijfremmen voor krachtig remmen en Shimano XT/SLX voor soepel en snel schakelen.',
            'price' => 2200,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Bratislava',
            'slug' => 'bratislava',
            'description' => 'De Bratislava elektrische herenfiets is een e-bike met uitmuntende prijs- / kwaliteit verhouding. De fiets is voorzien van een 13Ah accu waarmee u fietstochten tot wel 120km maakt.',
            'price' => 2100,
            'vat' => 1.21,
            'category_id' => 4,
            'manufacturer_id' => 5,
        ]);

        //kinderfietsen
        Product::create([
            'name' => 'Nippon',
            'slug' => 'nippon',
            'description' => 'Met de Nippon haal je een trendy transportfiets voor kinderen in huis die je voor alle soort ritten kan gebruiken.',
            'price' => 100,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 5,
        ]);

        Product::create([
            'name' => 'Zhongguo',
            'slug' => 'zhongguo',
            'description' => 'Perfecte kinderfiets voor stoere meiden, drie versnellingen en een dichte kettingkast die ervoor zorgt dat je geen vieze kleren krijgt',
            'price' => 110,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 4,
        ]);

        Product::create([
            'name' => 'Siam',
            'slug' => 'siam',
            'description' => 'Batterij verlichting voor- en achter, drie versnelling, terugtrap- en handrem',
            'price' => 120,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 3,
        ]);

        Product::create([
            'name' => 'Myanmar',
            'slug' => 'myanmar',
            'description' => 'De Batavus Booster 24 inch is voor de jongens die aan het eind van de basisschool zijn. Door het stoere en gebogen frame is de opstap hoger, wat de fiets een gave look geeft.',
            'price' => 60,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 2,
        ]);

        Product::create([
            'name' => 'Indonesia',
            'slug' => 'indonesia',
            'description' => 'Deze stoere fiets bevat twee handremmen en een terugtraprem om altijd veilig tot stilstand te komen.',
            'price' => 75,
            'vat' => 1.21,
            'category_id' => 5,
            'manufacturer_id' => 1,
        ]);

        Product::create([
            'name' => 'Malaysia',
            'slug' => 'malaysia',
            'description' => 'Met de Malaysia voel je je een echte ster! Deze super stevige kinderfiets is beschikbaar in 24 inch en in 26 inch en is voorzien van drie versnellingen! ',
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
