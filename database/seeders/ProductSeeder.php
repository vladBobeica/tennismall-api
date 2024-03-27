<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $racketsCategory = Category::where('name', 'rackets')->firstOrFail();
        $shoesCategory = Category::where('name', 'shoes')->firstOrFail();

        $products = [
            [
                'title' => 'Starvie Raptor Soft Master Edition',
                'price' => '2499',
                'category_id' => $racketsCategory->id,
                'description' => 'Starvie Raptor is back in a Master Edition in honor of Master Final 23! The perfect padel bat for the padel player who does not compromise!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/12/Starvie-Raptor-Soft-Master-Edition-jpg.webp',
            ],
            [
                'title' => 'Nox AT10 Genius 18K By Agustin Tapia 2024',
                'price' => '2429',
                'category_id' => $racketsCategory->id,
                'description' => 'The 2024 version of Agustin Tapia\'s padel bat has arrived. Packed with new technologies, new materials and an updated shape!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/09/Nox-AT10-Genius-18K-By-Agustin-Tapia-2024-896x896-jpg.webp',
            ],
            [
                'title' => 'Head Genesis Limited Edition',
                'price' => '850',
                'category_id' => $racketsCategory->id,
                'description' => 'The Head Genesis LTD is a sublime padel bat for you who want a bat that can do a bit of everything.',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2021/11/Head-GrapheneXT-Genisis-p-1-896x896-jpg.webp',
            ],
            [
                'title' => 'Bullpadel Hack 03 Master Final 23',
                'price' => '1999',
                'category_id' => $racketsCategory->id,
                'description' => 'For Master Final 23, Bullpadel has launched a Limited Edition collection - and of course Paquito Navarro\'s weapon is part of this launch! Perfect for the padel player who loves lyre and explosive power!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/12/Bullpadel-Hack-03-Master-Final-23-896x896-jpg.webp',
            ],
            [
                'title' => 'Adidas Metalbone HRD+',
                'price' => '2599',
                'category_id' => $racketsCategory->id,
                'description' => 'Ale Galán\'s favorite Metalbone HRD is back in a 2024 version - now with even more power! Perfect for the experienced padel player who loves an explosive attack!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/12/Adidas-Metalbone-HRD_8sn9m5-896x896-jpg.webp',
            ],
            [
                'title' => 'Head Extreme Pro',
                'price' => '2099',
                'category_id' => $racketsCategory->id,
                'description' => 'Delicious and explosive power padel bat from Head. Perfect for the experienced padel player who loves to \'slam it out of the cage\'!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/09/Head-Extreme-Pro-2-896x896-jpg.webp',
            ],
            [
                'title' => 'Babolat Air Veron 2024',
                'price' => '1799',
                'category_id' => $racketsCategory->id,
                'description' => 'The formidable Air Veron is back in the 2024 version - now with updated materials and new design! Perfect for the exerciser and the experienced player who is looking for an all-round padel bat!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2024/01/Babolat-Air-Veron-2024-896x896-jpg.webp',
            ],
            [
                'title' => 'Babolat Technical Veron 2023',
                'price' => '1099',
                'category_id' => $racketsCategory->id,
                'description' => 'Head-heavy padel bat with diamond-shaped head. Battet is aimed at experienced players.',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/01/Babolat-Technical-Veron-2023-896x896-jpg.webp',
            ],
            [
                'title' => 'Babolat Counter Vertuo 2023',
                'price' => '809',
                'category_id' => $racketsCategory->id,
                'description' => 'The acclaimed Counter Vertuo is back in 2023 clothes! It is the perfect padel bat for those who love lightness, a large sweet spot and precision that does not compromise on power.',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/02/Babolat-Counter-Vertuo-2023-1-896x896-jpg.webp',
            ],
            [
                'title' => 'Bullpadel Vertex 04 Hybrid 24',
                'price' => '2499',
                'category_id' => $racketsCategory->id,
                'description' => 'As part of the 2024 collection, Bullpadel has launched the successor to the Vertex 03 CTR - the Vertex 04 Hybrid 24. Now with new frame technologies and a hybrid head shape! Perfect for the experienced and controlling padel player!',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/09/Bullpadel-Vertex-04-Hybrid-24-5-896x896-jpg.webp',
            ],
            [
                'title' => 'Adidas Adizero Cybersonic White/Core Black',
                'price' => '1499',
                'category_id' => $shoesCategory->id,
                'description' => 'This lightweight shoe from Adidas provides sublime speed on the court and is suitable for the aggressive player who wants to be able to move quickly around the court. The shoes come in white with a nice color combination at the heel of blue and orange.',
                'image' => 'https://www.padelshoppen.com/wp-content/uploads/2023/10/1_vo2krs-896x896-jpg.webp',
            ],
        ];

        if (Product::count() === 0) {
            foreach ($products as $product) {
                Product::create($product);
            }
        }
    }
}
