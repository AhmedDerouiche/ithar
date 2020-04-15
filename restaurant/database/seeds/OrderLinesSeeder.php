<?php
use App\order_line;
use Illuminate\Database\Seeder;

class OrderLinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(orderLine::class, 300)->create();

    }
}
