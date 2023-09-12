<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;
use App\Models\Feature;
use App\Models\Newitem;
use App\Models\Sale;
use App\Models\Hot;
use App\Models\Deal;
use App\Models\Topselling;
use App\Models\Trend;
use App\Models\Payment;
use App\Models\User;
use App\Models\Order;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();
        Item::factory(10)->create();
        Feature::factory(10)->create();
        Newitem::factory(10)->create();
        Sale::factory(10)->create();
        Hot::factory(10)->create();
        Deal::factory(10)->create();
        Topselling::factory(10)->create();
        Trend::factory(10)->create();
        Payment::factory(10)->create();
        User::factory(10)->create();
        Order::factory(10)->create();
    }
}
