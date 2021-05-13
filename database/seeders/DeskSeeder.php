<?php

namespace Database\Seeders;

use App\Models\Desk;
use Illuminate\Database\Seeder;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pellentesque, arcu id ultricies volutpat, orci nulla pharetra enim, sit amet auctor augue lacus in tortor. In quis molestie justo. Duis sagittis placerat erat in viverra. Phasellus ornare est ut metus viverra dictum. Vestibulum vel vulputate risus. Cras consequat maximus lacus';
        $s = str_word_count($str, 1);
        srand((double) microtime() * 1000000000);

        for ($i = 0; $i < 25; $i++) {
            Desk::create([
                'name' => $s[rand(0, count($s) - 1)]
            ]);
        }
    }
}
