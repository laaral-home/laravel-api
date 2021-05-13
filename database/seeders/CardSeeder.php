<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = 'Pellentesque vestibulum sollicitudin nisi, sed posuere eros ornare vel. Aliquam erat volutpat. Nullam ut mi tincidunt, hendrerit nunc vel, dictum tortor. Etiam ultrices nisi in lorem maximus, et lobortis purus fermentum. Donec aliquam erat feugiat, aliquam ipsum at, mollis sem. Sed mi nunc, rutrum non augue sed, rhoncus fringilla neque. Suspendisse congue velit lorem, eu vestibulum velit iaculis sit amet. Praesent ac arcu at diam volutpat tristique. Vestibulum porta sem ut turpis pellentesque, nec vulputate libero pretium. Sed convallis felis eget lectus placerat, et dapibus velit sodales. Nulla varius sem ac felis pretium, et pharetra lorem vulputate. Aliquam tincidunt eros.';
        $s = str_word_count($str, 1);
        srand((double) microtime() * 1000000000);

        for ($i = 0; $i < 50; $i++) {
            Card::create([
                'name' => $s[rand(0, count($s) - 1)],
                'desk_list_id' => rand(1, 50)
            ]);
        }
    }
}
