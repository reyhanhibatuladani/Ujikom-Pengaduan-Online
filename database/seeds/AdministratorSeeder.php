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
        $administrator->username = "Admin";
        $administrator->name = "Administrator";
        $administrator->email = "admin@gmail.com";
        $administrator->no_telp = "08652332553";
        $administrator->roles = "ADMIN";
        $administrator->password = \Hash::make("12345678");

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
