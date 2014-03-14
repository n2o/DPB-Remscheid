<?php

use App\Models\User;

class SentrySeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();

        Sentry::getUserProvider()->create(array(
            'email'       => 'rambo@dpb-remscheid.de',
            'password'    => "diskette",
            'first_name'  => 'Christian',
            'last_name'   => 'Meter',
            'activated'   => 1,
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'Admin',
            'permissions' => array('admin' => 1),
        ));

        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('rambo@dpb-remscheid.de');
        $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
        $adminUser->addGroup($adminGroup);
    }

}
