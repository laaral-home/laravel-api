<?php

namespace Database\Seeders;

use App\Models\DeskList;
use Illuminate\Database\Seeder;

class DeskListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper, urna eget egestas tempor, magna orci posuere sem, fermentum varius augue sem ac sapien. Proin tempor nunc id ex eleifend, ut consequat urna congue. Quisque et auctor nibh, at consequat nunc. Curabitur ultricies est vitae varius ornare. Curabitur congue ultrices vulputate. Phasellus leo nibh, vulputate id imperdiet quis, luctus eget turpis. Donec in mi a sem euismod tristique vitae ac erat. Vivamus sed mauris posuere justo ornare ullamcorper vel at elit. Nullam eget arcu tincidunt, porta justo ut, faucibus lectus. Integer quis commodo tortor, a condimentum enim. Suspendisse et suscipit.';
        $s = str_word_count($str, 1);
        srand((double) microtime() * 1000000000);

        for ($i = 0; $i < 50; $i++) {
            DeskList::create([
                'name' => $s[rand(0, count($s) - 1)],
                'desk_id' => rand(1, 25)
            ]);
        }
    }
}
