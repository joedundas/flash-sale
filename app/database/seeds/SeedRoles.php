<?php

class SeedRoles extends Seeder
{
    public function run() {

        DB::table('roles')->delete();

        DB::table('roles')->insert(
            array(
                array('id'=>1,'title'=>'Owner', 'description'=>'Owner of the account'),
                array('id'=>2,'title'=>'Admin','description'=>'Administrator of the account'),
            )
        );

    }

}



