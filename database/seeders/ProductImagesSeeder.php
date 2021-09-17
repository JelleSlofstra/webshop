<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //citybikes
        ProductImage::create([
            'image'         => 'citybikes/orange1.jpg',
            'product_id'    => 1
        ]);
        ProductImage::create([
            'image'         => 'citybikes/orange2.jpg',
            'product_id'    => 1
        ]);
        ProductImage::create([
            'image'         => 'citybikes/esprit1.jpg',
            'product_id'    => 2
        ]);
        ProductImage::create([
            'image'         => 'citybikes/esprit2.jpg',
            'product_id'    => 2
        ]);
        ProductImage::create([
            'image'         => 'citybikes/puurnl1.jpg',
            'product_id'    => 3
        ]);
        ProductImage::create([
            'image'         => 'citybikes/puurnl2.jpg',
            'product_id'    => 3
        ]);
        ProductImage::create([
            'image'         => 'citybikes/urban1.jpg',
            'product_id'    => 4
        ]);
        ProductImage::create([
            'image'         => 'citybikes/urban2.jpg',
            'product_id'    => 4
        ]);
        ProductImage::create([
            'image'         => 'citybikes/finesse1.jpg',
            'product_id'    => 5
        ]);
        ProductImage::create([
            'image'         => 'citybikes/finesse2.jpg',
            'product_id'    => 5
        ]);
        ProductImage::create([
            'image'         => 'citybikes/markiv1.jpg',
            'product_id'    => 6
        ]);
        ProductImage::create([
            'image'         => 'citybikes/markiv2.jpg',
            'product_id'    => 6
        ]);

        //MTB
        ProductImage::create([
            'image'         => 'mtb/ycaliber1.jpg',
            'product_id'    => 7
        ]);
        ProductImage::create([
            'image'         => 'mtb/ycaliber2.jpg',
            'product_id'    => 7
        ]);
        ProductImage::create([
            'image'         => 'mtb/ironhead1.jpg',
            'product_id'    => 8
        ]);
        ProductImage::create([
            'image'         => 'mtb/ironhead2.jpg',
            'product_id'    => 8
        ]);
        ProductImage::create([
            'image'         => 'mtb/klauw1.jpg',
            'product_id'    => 9
        ]);
        ProductImage::create([
            'image'         => 'mtb/klauw2.jpg',
            'product_id'    => 9
        ]);
        ProductImage::create([
            'image'         => 'mtb/merlijn1.jpg',
            'product_id'    => 10
        ]);
        ProductImage::create([
            'image'         => 'mtb/merlijn2.jpg',
            'product_id'    => 10
        ]);
        ProductImage::create([
            'image'         => 'mtb/schaal1.jpg',
            'product_id'    => 11
        ]);
        ProductImage::create([
            'image'         => 'mtb/schaal2.jpg',
            'product_id'    => 11
        ]);
        ProductImage::create([
            'image'         => 'mtb/ycaliber1.jpg',
            'product_id'    => 12
        ]);
        ProductImage::create([
            'image'         => 'mtb/ycaliber2.jpg',
            'product_id'    => 12
        ]);

        //racingbikes
        ProductImage::create([
            'image'         => 'racingbikes/latina1.jpg',
            'product_id'    => 13
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/latina2.jpg',
            'product_id'    => 13
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/axiaalq1.jpg',
            'product_id'    => 14
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/axiaalq2.jpg',
            'product_id'    => 14
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/zwever1.jpg',
            'product_id'    => 15
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/zwever2.jpg',
            'product_id'    => 15
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/axiaals1.jpg',
            'product_id'    => 16
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/axiaals2.jpg',
            'product_id'    => 16
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/skunst1.jpg',
            'product_id'    => 17
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/skunst2.jpg',
            'product_id'    => 17
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/noach1.jpg',
            'product_id'    => 18
        ]);
        ProductImage::create([
            'image'         => 'racingbikes/noach2.jpg',
            'product_id'    => 18
        ]);

        //ebikes
        ProductImage::create([
            'image'         => 'ebikes/roma1.jpg',
            'product_id'    => 19
        ]);
        ProductImage::create([
            'image'         => 'ebikes/roma2.jpg',
            'product_id'    => 19
        ]);
        ProductImage::create([
            'image'         => 'ebikes/lissabon1.jpg',
            'product_id'    => 20
        ]);
        ProductImage::create([
            'image'         => 'ebikes/lissabon2.jpg',
            'product_id'    => 20
        ]);
        ProductImage::create([
            'image'         => 'ebikes/praha1.jpg',
            'product_id'    => 21
        ]);
        ProductImage::create([
            'image'         => 'ebikes/praha2.jpg',
            'product_id'    => 21
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bucharest20-1.jpg',
            'product_id'    => 22
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bucharest20-2.jpg',
            'product_id'    => 22
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bucharest19-1.jpg',
            'product_id'    => 23
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bucharest19-2.jpg',
            'product_id'    => 23
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bratislava1.jpg',
            'product_id'    => 24
        ]);
        ProductImage::create([
            'image'         => 'ebikes/bratislava2.jpg',
            'product_id'    => 24
        ]);

        //children's bikes
        ProductImage::create([
            'image'         => 'childsbikes/nippon1.jpg',
            'product_id'    => 25
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/nippon2.jpg',
            'product_id'    => 25
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/zhongguo1.jpg',
            'product_id'    => 26
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/zhongguo2.jpg',
            'product_id'    => 26
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/siam1.jpg',
            'product_id'    => 27
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/siam2.jpg',
            'product_id'    => 27
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/myanmar1.jpg',
            'product_id'    => 28
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/myanmar2.jpg',
            'product_id'    => 28
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/indonesia1.jpg',
            'product_id'    => 29
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/indonesia2.jpg',
            'product_id'    => 29
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/malaysia1.jpg',
            'product_id'    => 30
        ]);
        ProductImage::create([
            'image'         => 'childsbikes/malaysia2.jpg',
            'product_id'    => 30
        ]);

        //accessoires
        ProductImage::create([
            'image'         => 'accessoires/phoneholder1.jpg',
            'product_id'    => 31
        ]);
        ProductImage::create([
            'image'         => 'accessoires/phoneholder2.jpg',
            'product_id'    => 31
        ]);
        ProductImage::create([
            'image'         => 'accessoires/gelzadel1.jpg',
            'product_id'    => 32
        ]);
        ProductImage::create([
            'image'         => 'accessoires/gelzadel2.jpg',
            'product_id'    => 32
        ]);
        ProductImage::create([
            'image'         => 'accessoires/fietstas1.jpg',
            'product_id'    => 33
        ]);
        ProductImage::create([
            'image'         => 'accessoires/fietstas2.jpg',
            'product_id'    => 33
        ]);
        ProductImage::create([
            'image'         => 'accessoires/kabelslot1.jpg',
            'product_id'    => 34
        ]);
        ProductImage::create([
            'image'         => 'accessoires/kabelslot2.jpg',
            'product_id'    => 34
        ]);
        ProductImage::create([
            'image'         => 'accessoires/fietspomp1.jpg',
            'product_id'    => 35
        ]);
        ProductImage::create([
            'image'         => 'accessoires/fietspomp2.jpg',
            'product_id'    => 35
        ]);
        ProductImage::create([
            'image'         => 'accessoires/krat1.jpg',
            'product_id'    => 36
        ]);
        ProductImage::create([
            'image'         => 'accessoires/krat2.jpg',
            'product_id'    => 36
        ]);

        //placeholders
        foreach (Product::all() as $product)
        {
            ProductImage::create([
                'image'         => 'fiets.jpg',
                'product_id'    => $product->id
            ]);
            
            ProductImage::create([
                'image'         => 'krat.jpg',
                'product_id'    => $product->id
            ]);
        }        
    }
}
