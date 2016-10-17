<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
    }
}

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'id' => 1000000000, // init
          'fname' => 'Dave Dane',
          'mname' => 'Agravante', // optional
          'lname' => 'Pacilan',
          'email' => 'davedanepacilan3p@gmail.com', // unique
          'password' => Hash::make('12345678'), // min:8
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Chiarra',
          'lname' => 'Sebial',
          'email' => 'chiarra97@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Maria Divina',
          'mname' => 'Altarejos',
          'lname' => 'Alegre',
          'email' => 'iyatot@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Rachel Anne',
          'mname' => 'Agravante',
          'lname' => 'Quiamco',
          'email' => 'rachelannequiamco3t@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'John Dominique',
          'mname' => 'Alforque',
          'lname' => 'Lawas',
          'email' => 'nique@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Ronnel',
          'mname' => 'Motesa',
          'lname' => 'Heredia',
          'email' => 'rh1234@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Sealtiel Kent',
          'mname' => 'Obial',
          'lname' => 'Generale',
          'email' => 'captainlevi@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Jesscel',
          'mname' => 'Pepito',
          'lname' => 'Zapanta',
          'email' => 'jesscelzapanta@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'Jullianne Kae',
          'mname' => 'Tajanlangit',
          'lname' => 'Pongasi',
          'email' => 'julliannepongasi@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'April Grace',
          'mname' => 'Amit',
          'lname' => 'Mongaya',
          'email' => 'aprilgracemongaya@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('users')->insert([
          'fname' => 'John Carlo',
          'mname' => 'Caputol',
          'lname' => 'Lawas',
          'email' => 'johncarlolawas@gmail.com',
          'password' => Hash::make('12345678'),
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
          'id' => 1000000000, // init
          'user_id' => 1000000000, // on:users
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla id nisi perspiciatis, magnam expedita cum porro aut molestias accusantium praesentium optio magni explicabo. Laboriosam impedit rerum est, voluptatibus explicabo optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis veritatis voluptas voluptates libero corporis quasi eligendi aliquid minus tempora, itaque! Consequuntur veniam, sequi, voluptatem deleniti at reiciendis quis ex expedita!',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000006,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae voluptatem sequi culpa nisi ullam facilis, incidunt maxime asperiores libero ex minima perferendis tempore, voluptates, minus unde sed aperiam? Qui.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000002,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit cumque doloribus beatae modi sint voluptates, dicta debitis? Similique ratione commodi in, ipsam deserunt cupiditate error hic rerum. Cupiditate, eligendi. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000001,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima sapiente fugiat, corporis facere amet. Voluptates repellendus, accusantium inventore pariatur eos tenetur hic vel nostrum ullam eveniet, in repudiandae impedit nihil. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000009,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, iusto blanditiis fugit minima reiciendis nemo, dicta corporis magnam, recusandae, delectus vero facilis deserunt eos neque porro voluptas eligendi odit. Accusamus! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000003,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, facilis et. Aliquid consequuntur sit aut nam cum doloremque laudantium? Deleniti magnam ea odit voluptas eaque ratione ullam dolorum, quod cumque! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000005,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi id nemo rem, repellat illo necessitatibus tempore eos, quam unde doloremque aperiam et fugit sint nisi earum. Voluptatibus omnis, laudantium assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000007,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo nostrum nobis voluptas amet vel iure obcaecati animi odit molestias reprehenderit facilis earum impedit nam laboriosam dolores, enim laborum iusto eveniet! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000008,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi nobis fugiat sequi, obcaecati provident eligendi voluptates cum autem, saepe quisquam et ad quod natus sunt repudiandae. Ex, unde numquam. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000009,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, facilis et, ipsam at consectetur, eos beatae optio magni harum voluptates vitae corrupti itaque? Dicta, necessitatibus a excepturi voluptas fugiat incidunt. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000005,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aspernatur perferendis laborum omnis repellat, id. Quo quidem, vitae fugit? Pariatur hic, placeat, perferendis unde voluptas praesentium vero illum ipsa error. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000001,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa reiciendis, maiores exercitationem non corrupti id debitis, et dolorem numquam at, harum ab commodi. Provident voluptas, ex officiis nesciunt atque aperiam? Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000007,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iste repudiandae nesciunt ea nihil a vitae totam cum nostrum, repellendus, quidem accusantium, dolorum reiciendis quisquam facere adipisci. Labore eligendi, maxime. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000003,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque optio consequuntur vero, voluptatem omnis corporis facere ex dolorem ratione tempora ipsum impedit, quo consectetur, ut beatae ipsa laboriosam iusto. Nostrum! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consequuntur suscipit mollitia quis distinctio nulla velit cupiditate quas corporis iusto impedit consequatur architecto quos aliquam beatae similique porro, maxime molestiae. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000006,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000002,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000008,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('posts')->insert([
          'user_id' => 1000000000,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
          'id' => 1000000000, // init
          'post_id' => 1000000000,
          'user_id' => 1000000000, // on:users
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla id nisi perspiciatis, magnam expedita cum porro aut molestias accusantium praesentium optio magni explicabo. Laboriosam impedit rerum est, voluptatibus explicabo optio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis veritatis voluptas voluptates libero corporis quasi eligendi aliquid minus tempora, itaque! Consequuntur veniam, sequi, voluptatem deleniti at reiciendis quis ex expedita!',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000001,
          'user_id' => 1000000006,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae voluptatem sequi culpa nisi ullam facilis, incidunt maxime asperiores libero ex minima perferendis tempore, voluptates, minus unde sed aperiam? Qui.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000002,
          'user_id' => 1000000002,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius suscipit cumque doloribus beatae modi sint voluptates, dicta debitis? Similique ratione commodi in, ipsam deserunt cupiditate error hic rerum. Cupiditate, eligendi. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000003,
          'user_id' => 1000000001,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima sapiente fugiat, corporis facere amet. Voluptates repellendus, accusantium inventore pariatur eos tenetur hic vel nostrum ullam eveniet, in repudiandae impedit nihil. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000004,
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000005,
          'user_id' => 1000000009,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, iusto blanditiis fugit minima reiciendis nemo, dicta corporis magnam, recusandae, delectus vero facilis deserunt eos neque porro voluptas eligendi odit. Accusamus! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000006,
          'user_id' => 1000000003,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, facilis et. Aliquid consequuntur sit aut nam cum doloremque laudantium? Deleniti magnam ea odit voluptas eaque ratione ullam dolorum, quod cumque! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000007,
          'user_id' => 1000000005,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi id nemo rem, repellat illo necessitatibus tempore eos, quam unde doloremque aperiam et fugit sint nisi earum. Voluptatibus omnis, laudantium assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000008,
          'user_id' => 1000000007,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo nostrum nobis voluptas amet vel iure obcaecati animi odit molestias reprehenderit facilis earum impedit nam laboriosam dolores, enim laborum iusto eveniet! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000009,
          'user_id' => 1000000008,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi nobis fugiat sequi, obcaecati provident eligendi voluptates cum autem, saepe quisquam et ad quod natus sunt repudiandae. Ex, unde numquam. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000010,
          'user_id' => 1000000009,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, facilis et, ipsam at consectetur, eos beatae optio magni harum voluptates vitae corrupti itaque? Dicta, necessitatibus a excepturi voluptas fugiat incidunt. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000011,
          'user_id' => 1000000005,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae aspernatur perferendis laborum omnis repellat, id. Quo quidem, vitae fugit? Pariatur hic, placeat, perferendis unde voluptas praesentium vero illum ipsa error. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000012,
          'user_id' => 1000000001,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa reiciendis, maiores exercitationem non corrupti id debitis, et dolorem numquam at, harum ab commodi. Provident voluptas, ex officiis nesciunt atque aperiam? Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000013,
          'user_id' => 1000000007,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla iste repudiandae nesciunt ea nihil a vitae totam cum nostrum, repellendus, quidem accusantium, dolorum reiciendis quisquam facere adipisci. Labore eligendi, maxime. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000014,
          'user_id' => 1000000003,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque optio consequuntur vero, voluptatem omnis corporis facere ex dolorem ratione tempora ipsum impedit, quo consectetur, ut beatae ipsa laboriosam iusto. Nostrum! Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000015,
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni consequuntur suscipit mollitia quis distinctio nulla velit cupiditate quas corporis iusto impedit consequatur architecto quos aliquam beatae similique porro, maxime molestiae. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000016,
          'user_id' => 1000000006,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000017,
          'user_id' => 1000000004,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000018,
          'user_id' => 1000000002,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000019,
          'user_id' => 1000000008,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('comments')->insert([
          'post_id' => 1000000020,
          'user_id' => 1000000000,
          'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat voluptate sit autem sapiente omnis repudiandae natus veritatis. Beatae illo, earum architecto laudantium, culpa nemo et provident, illum esse, maiores assumenda. Velit recusandae hic fugiat laudantium obcaecati deleniti. Sint doloremque facere aspernatur id, quae libero vel, eos in suscipit corporis ducimus asperiores mollitia.',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
          'user_id' => 1000000000,
          'bio' => 'Please follow me on Instagram: PrismPrince_XX',
          'sex' => 'Male',
          'bday' => '1996-8-19',
          'loc' => 'Bantayan, Cebu',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000001,
          'bio' => 'My only hobby is KKK: Kaon, Kalibang, Katulog!!!',
          'sex' => 'Female',
          'bday' => '1997-12-9',
          'loc' => 'San Fernando, Cebu',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000002,
          'bio' => 'My heart is fragile!!! ♥',
          'sex' => 'Female',
          'loc' => 'Masbate',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000003,
          'bio' => 'Hahaha,,, Happy Go Lucky :)',
          'sex' => 'Female',
          'bday' => '1996-12-9',
          'loc' => 'Bantayan, Cebu',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000004,
          'bio' => 'I\'m not what you think I am!',
          'sex' => 'Male',
          'loc' => 'Lapu-lapu City, Cebu',
          'pref' => 'Women',
          'status' => 'In a relationship',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000005,
          'bio' => 'My one and only GANG!!!',
          'sex' => 'Male',
          'loc' => 'Danao, Cebu',
          'pref' => 'Women',
          'status' => 'In a relationship',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000006,
          'bio' => 'Kentaru! Ang batang BONER!!!',
          'sex' => 'Male',
          'loc' => 'San Fernando, Cebu',
          'pref' => 'Men and Women',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000007,
          'bio' => 'A simple, beautiful, sexy and loving mother!!! Yep, that\'s me!! :)',
          'sex' => 'Female',
          'loc' => 'Consolacion, Cebu',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000008,
          'bio' => 'Loved by my GANG!!! hehehe,,,',
          'sex' => 'Female',
          'loc' => 'Lapu-lapu City, Cebu',
          'pref' => 'Men',
          'status' => 'In a relationship',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000009,
          'bio' => 'A simple baby girl',
          'sex' => 'Female',
          'loc' => 'Consolacion, Cebu',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);

        DB::table('abouts')->insert([
          'user_id' => 1000000010,
          'bio' => 'Please follow me on Instagram: johncarlolawas',
          'sex' => 'Male',
          'loc' => 'Danao, Cebu',
          'pref' => 'Men',
          'status' => 'Single',
          'created_at' => date('Y-m-d H:i:s', time()),
          'updated_at' => date('Y-m-d H:i:s', time()),
        ]);
    }
}
