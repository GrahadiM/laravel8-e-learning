<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // dashboard
            'C-dashboard',
            'R-dashboard',
            'U-dashboard',
            'D-dashboard',

            // data-mahasiswa
            'C-data-mahasiswa',
            'R-data-mahasiswa',
            'U-data-mahasiswa',
            'D-data-mahasiswa',

            // data-dosen
            'C-data-dosen',
            'R-data-dosen',
            'U-data-dosen',
            'D-data-dosen',

            // data-category
            'C-data-category',
            'R-data-category',
            'U-data-category',
            'D-data-category',

            // data-matkul
            'C-data-matkul',
            'R-data-matkul',
            'U-data-matkul',
            'D-data-matkul',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }
    }
}
