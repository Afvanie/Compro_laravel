<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->name        = "Administrator";
        $administrator->email       = "admin@gmail.com";
        $administrator->password    = \Hash::make("admin");
        $administrator->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}
