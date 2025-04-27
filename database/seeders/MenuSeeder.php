<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Cheese Burger',
                'description' => 'Juicy grilled beef patty topped with melted cheese, lettuce, and tomato.',
                'price' => 8.99,
                'category' => 'Burger',
                'foto' => 'burger.jpg',
            ],
            [
                'name' => 'Pepperoni Pizza',
                'description' => 'Classic pizza topped with lots of pepperoni and mozzarella cheese.',
                'price' => 12.50,
                'category' => 'Pizza',
                'foto' => 'pizza.jpg',
            ],
            [
                'name' => 'Spaghetti Carbonara',
                'description' => 'Creamy pasta with crispy bacon, parmesan, and black pepper.',
                'price' => 10.00,
                'category' => 'Pasta',
                'foto' => 'carbonara.jpg',
            ],
            [
                'name' => 'Chicken Salad',
                'description' => 'Fresh greens topped with grilled chicken, tomatoes, and a light vinaigrette.',
                'price' => 7.50,
                'category' => 'Salad',
                'foto' => 'salad.jpg',
            ],
            [
                'name' => 'Iced Coffee',
                'description' => 'Refreshing iced coffee brewed to perfection.',
                'price' => 3.99,
                'category' => 'Beverage',
                'foto' => 'kopi.jpg',
            ],
            [
                'name' => 'Chocolate Cake',
                'description' => 'Rich and moist chocolate cake topped with chocolate ganache.',
                'price' => 5.50,
                'category' => 'Dessert',
                'foto' => 'cake.jpg',
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
