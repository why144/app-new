<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        User::create([
            'name' => 'Trafagraw Law',
            'username' => 'torao',
            'email' => 'torao@gmail.com',
            'password' => bcrypt('12345'),
        ]);
        // User::create([
        //     'name' => 'Roronoa Zoro',
        //     'email' => 'roronoazoro@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Postingan Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid eveniet, ducimus quam consequuntur assumenda rerum sed animi quibusdam neque rem unde aut quo recusandae officia distinctio? Obcaecati in rerum ullam amet repellendus, aspernatur sed nihil eaque quia non suscipit repudiandae asperiores molestias hic sint voluptatem dolore ipsum rem doloremque. Ipsam minima deleniti nihil autem labore debitis libero cum repudiandae incidunt iure tempore, illum blanditiis sit accusamus, quam consequuntur adipisci? Natus voluptate similique reprehenderit eum officiis? Totam nam quaerat voluptate accusamus deserunt sunt dicta culpa explicabo sapiente modi ratione assumenda dolore officia repellat, itaque, sit alias maiores nobis corporis dolorem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rem, explicabo distinctio et nesciunt quibusdam ipsam commodi quaerat libero dicta, voluptas quia pariatur, facilis similique deleniti voluptatem necessitatibus blanditiis repudiandae repellat deserunt tenetur consequuntur numquam ut! Odio minus obcaecati vitae, sint quisquam assumenda repellendus quam aut beatae quaerat officia, modi dicta architecto quasi reprehenderit cumque quas culpa nobis distinctio, omnis quibusdam aliquam non corporis. Iste dolore facere doloribus blanditiis, delectus enim harum nobis? Eligendi excepturi maxime quas nemo quos eveniet.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam itaque quod cumque voluptatibus dicta optio cupiditate, architecto, omnis exercitationem cum molestiae autem labore. Pariatur quia dolorum expedita, ex iste ipsum odit magnam amet architecto reprehenderit dolor obcaecati dolore, animi, fugit aliquam facere inventore provident. Distinctio possimus eius ut. Incidunt nesciunt rem quo voluptates nemo, dignissimos laboriosam magnam aliquid debitis, beatae odit officia qui magni molestiae accusamus corrupti quasi. Illum temporibus, sapiente ducimus beatae dolor praesentium fugiat! Culpa assumenda dolorum itaque veritatis? Autem harum dolores dicta corporis sapiente atque deleniti sint minima doloremque dignissimos, amet quibusdam quia nostrum! Impedit iure a hic nihil, unde ipsam corrupti tenetur harum, consequatur soluta odit dolore nostrum, nisi sequi facere rerum mollitia est quis! Quas.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Postingan Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-postingan-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid eveniet, ducimus quam consequuntur assumenda rerum sed animi quibusdam neque rem unde aut quo recusandae officia distinctio? Obcaecati in rerum ullam amet repellendus, aspernatur sed nihil eaque quia non suscipit repudiandae asperiores molestias hic sint voluptatem dolore ipsum rem doloremque. Ipsam minima deleniti nihil autem labore debitis libero cum repudiandae incidunt iure tempore, illum blanditiis sit accusamus, quam consequuntur adipisci? Natus voluptate similique reprehenderit eum officiis? Totam nam quaerat voluptate accusamus deserunt sunt dicta culpa explicabo sapiente modi ratione assumenda dolore officia repellat, itaque, sit alias maiores nobis corporis dolorem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rem, explicabo distinctio et nesciunt quibusdam ipsam commodi quaerat libero dicta, voluptas quia pariatur, facilis similique deleniti voluptatem necessitatibus blanditiis repudiandae repellat deserunt tenetur consequuntur numquam ut! Odio minus obcaecati vitae, sint quisquam assumenda repellendus quam aut beatae quaerat officia, modi dicta architecto quasi reprehenderit cumque quas culpa nobis distinctio, omnis quibusdam aliquam non corporis. Iste dolore facere doloribus blanditiis, delectus enim harum nobis? Eligendi excepturi maxime quas nemo quos eveniet.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam itaque quod cumque voluptatibus dicta optio cupiditate, architecto, omnis exercitationem cum molestiae autem labore. Pariatur quia dolorum expedita, ex iste ipsum odit magnam amet architecto reprehenderit dolor obcaecati dolore, animi, fugit aliquam facere inventore provident. Distinctio possimus eius ut. Incidunt nesciunt rem quo voluptates nemo, dignissimos laboriosam magnam aliquid debitis, beatae odit officia qui magni molestiae accusamus corrupti quasi. Illum temporibus, sapiente ducimus beatae dolor praesentium fugiat! Culpa assumenda dolorum itaque veritatis? Autem harum dolores dicta corporis sapiente atque deleniti sint minima doloremque dignissimos, amet quibusdam quia nostrum! Impedit iure a hic nihil, unde ipsam corrupti tenetur harum, consequatur soluta odit dolore nostrum, nisi sequi facere rerum mollitia est quis! Quas.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Postingan Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-postingan-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid eveniet, ducimus quam consequuntur assumenda rerum sed animi quibusdam neque rem unde aut quo recusandae officia distinctio? Obcaecati in rerum ullam amet repellendus, aspernatur sed nihil eaque quia non suscipit repudiandae asperiores molestias hic sint voluptatem dolore ipsum rem doloremque. Ipsam minima deleniti nihil autem labore debitis libero cum repudiandae incidunt iure tempore, illum blanditiis sit accusamus, quam consequuntur adipisci? Natus voluptate similique reprehenderit eum officiis? Totam nam quaerat voluptate accusamus deserunt sunt dicta culpa explicabo sapiente modi ratione assumenda dolore officia repellat, itaque, sit alias maiores nobis corporis dolorem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rem, explicabo distinctio et nesciunt quibusdam ipsam commodi quaerat libero dicta, voluptas quia pariatur, facilis similique deleniti voluptatem necessitatibus blanditiis repudiandae repellat deserunt tenetur consequuntur numquam ut! Odio minus obcaecati vitae, sint quisquam assumenda repellendus quam aut beatae quaerat officia, modi dicta architecto quasi reprehenderit cumque quas culpa nobis distinctio, omnis quibusdam aliquam non corporis. Iste dolore facere doloribus blanditiis, delectus enim harum nobis? Eligendi excepturi maxime quas nemo quos eveniet.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam itaque quod cumque voluptatibus dicta optio cupiditate, architecto, omnis exercitationem cum molestiae autem labore. Pariatur quia dolorum expedita, ex iste ipsum odit magnam amet architecto reprehenderit dolor obcaecati dolore, animi, fugit aliquam facere inventore provident. Distinctio possimus eius ut. Incidunt nesciunt rem quo voluptates nemo, dignissimos laboriosam magnam aliquid debitis, beatae odit officia qui magni molestiae accusamus corrupti quasi. Illum temporibus, sapiente ducimus beatae dolor praesentium fugiat! Culpa assumenda dolorum itaque veritatis? Autem harum dolores dicta corporis sapiente atque deleniti sint minima doloremque dignissimos, amet quibusdam quia nostrum! Impedit iure a hic nihil, unde ipsam corrupti tenetur harum, consequatur soluta odit dolore nostrum, nisi sequi facere rerum mollitia est quis! Quas.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Postingan Kempat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-postingan-kempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur aliquid eveniet, ducimus quam consequuntur assumenda rerum sed animi quibusdam neque rem unde aut quo recusandae officia distinctio? Obcaecati in rerum ullam amet repellendus, aspernatur sed nihil eaque quia non suscipit repudiandae asperiores molestias hic sint voluptatem dolore ipsum rem doloremque. Ipsam minima deleniti nihil autem labore debitis libero cum repudiandae incidunt iure tempore, illum blanditiis sit accusamus, quam consequuntur adipisci? Natus voluptate similique reprehenderit eum officiis? Totam nam quaerat voluptate accusamus deserunt sunt dicta culpa explicabo sapiente modi ratione assumenda dolore officia repellat, itaque, sit alias maiores nobis corporis dolorem?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi rem, explicabo distinctio et nesciunt quibusdam ipsam commodi quaerat libero dicta, voluptas quia pariatur, facilis similique deleniti voluptatem necessitatibus blanditiis repudiandae repellat deserunt tenetur consequuntur numquam ut! Odio minus obcaecati vitae, sint quisquam assumenda repellendus quam aut beatae quaerat officia, modi dicta architecto quasi reprehenderit cumque quas culpa nobis distinctio, omnis quibusdam aliquam non corporis. Iste dolore facere doloribus blanditiis, delectus enim harum nobis? Eligendi excepturi maxime quas nemo quos eveniet.</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ullam itaque quod cumque voluptatibus dicta optio cupiditate, architecto, omnis exercitationem cum molestiae autem labore. Pariatur quia dolorum expedita, ex iste ipsum odit magnam amet architecto reprehenderit dolor obcaecati dolore, animi, fugit aliquam facere inventore provident. Distinctio possimus eius ut. Incidunt nesciunt rem quo voluptates nemo, dignissimos laboriosam magnam aliquid debitis, beatae odit officia qui magni molestiae accusamus corrupti quasi. Illum temporibus, sapiente ducimus beatae dolor praesentium fugiat! Culpa assumenda dolorum itaque veritatis? Autem harum dolores dicta corporis sapiente atque deleniti sint minima doloremque dignissimos, amet quibusdam quia nostrum! Impedit iure a hic nihil, unde ipsam corrupti tenetur harum, consequatur soluta odit dolore nostrum, nisi sequi facere rerum mollitia est quis! Quas.</p>'
        // ]);
    }
}
