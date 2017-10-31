<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product =new \App\product([
          'imagePath'=>'https://ubistatic19-a.akamaihd.net/ubicomstatic/en-US/global/media/Header_1600x1000_264197.jpg',
          'title'=>'Assassin Creed',
          'description'=>'Super asdasdl lkjlaks das asdkljas ',
          'price'=>10

        ]);
        $product->save();
        $product =new \App\product([
          'imagePath'=>'https://s.aolcdn.com/hss/storage/midas/563432c805cbf8a331321389958aa3bd/201911290/Black-Ops-3_Key-Art_Horiz.jpg',
          'title'=>'Call Of duty',
          'description'=>'Super asdasdl lkjlaks das asdkljas ',
          'price'=>23

        ]);
        $product->save();
        $product =new \App\product([
          'imagePath'=>'https://media.playstation.com/is/image/SCEA/battlefield-1-listing-thumb-01-ps4-us-08nov16?$Icon$',
          'title'=>'battlefield-1',
          'description'=>'Super asdasdl lkjlaks das asdkljas ',
          'price'=>10

        ]);
        $product->save();
        $product =new \App\product([
          'imagePath'=>'https://static.trueachievements.com/customimages/066267.jpg',
          'title'=>'Fifa 18',
          'description'=>'Super asdasdl lkjlaks das asdkljas ',
          'price'=>10

        ]);
        $product->save();
    }
}
