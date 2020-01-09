<?php

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
        $names = [
            'Tanaka_tarou',
            'Hanayama_kaoru',
            'Ando_toshio',
            'Ohi_tyao',
            'aiueo1',
            'iiiiiii',
            'uuuuuuuu',
            'eeeeee',
          ];
    
          foreach ($names as $key => $value) {
            \App\User::create([
                'id' => substr($key, 11),
                'email' => $value.'@gmail.com',
                'password' => bcrypt('123456'),
                'name' => $value,
                'message' => $value.'さんのテスト投稿です。'
            ]);
        }
    }
}