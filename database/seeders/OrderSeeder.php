<?php

namespace Database\Seeders;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orderOne = Order::create([
            'date'        => Carbon::now()->subDays(10),
            'description' => 'Light labour of some sort',
        ]);

        $orderOne->lines()->create([
            'amount'      => 2,
            'description' => 'Light dusting of selected surfaces',
            'price'       => 2500,
        ]);

        $orderOne->lines()->create([
            'amount'      => 5,
            'description' => 'Quietly contemplating life\'s choices',
            'price'       => 5000,
        ]);

        $orderTwo = Order::create([
            'date'        => Carbon::now()->subDays(5),
            'description' => 'Hard thinking things',
        ]);

        $orderTwo->lines()->create([
            'amount'      => 5,
            'description' => 'Serious doubts taken away',
            'price'       => 3400,
        ]);

        $orderTwo->lines()->create([
            'amount'      => 4,
            'description' => 'Softly singing of "Soft Kitty, Warm Kitty"',
            'price'       => 2000,
        ]);

        $orderThree = Order::create([
            'date'        => Carbon::now()->subDays(22),
            'description' => 'Game explanation',
        ]);

        $orderThree->lines()->create([
            'amount'      => 2,
            'description' => 'Explaining rock, paper, scissors, lizard, spock for the first time',
            'price'       => 2500,
        ]);

        $orderThree->lines()->create([
            'amount'      => 3,
            'description' => 'Explaining rock, paper, scissors, lizard, spock for the second time',
            'price'       => 2500,
        ]);
    }
}
