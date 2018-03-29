<?php

class SeedUsers extends Seeder
{
    public function run() {

        DB::table('users')->delete();

        $this->seed_users();

    }

    public function seed_users() {




    }





}



