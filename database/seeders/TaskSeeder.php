<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $str = 'Morbi sagittis suscipit ipsum, a scelerisque neque convallis sit amet. Aliquam at diam magna. In auctor orci vel ex euismod varius. Morbi lacinia aliquet lorem eget volutpat. Vivamus suscipit euismod mi quis posuere. Donec rhoncus, mauris at molestie tempus, arcu tellus sollicitudin turpis, sit amet viverra lacus ex ac ligula. Vestibulum eu ornare lorem. In hac habitasse platea dictumst. Sed vitae condimentum leo. Quisque in lectus nisl. Pellentesque sem dolor, gravida ut dui id, eleifend dignissim ante. Proin vehicula urna sed dignissim suscipit. Proin finibus, arcu vitae gravida ornare, est neque gravida odio, vel lacinia arcu eros id sem. Proin.';
        $s = str_word_count($str, 1);
        srand((double) microtime() * 1000000000);

        for ($i = 0; $i < 50; $i++) {
            Task::create([
                'name' => $s[rand(0, count($s) - 1)],
                'card_id' => rand(1, 50)
            ]);
        }
    }
}
