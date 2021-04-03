<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Auth\Database\Permission;
use Illuminate\Support\Facades\Hash;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // create a user.
        Administrator::truncate();
        Administrator::create([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name'     => 'Administrator',
        ]);

        // create a role.
        Role::truncate();
        Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator',
        ]);

        // add role to user.
        Administrator::first()->roles()->save(Role::first());

        //create a permission
        Permission::truncate();
        Permission::insert([
            [
                'name'        => 'All permission',
                'slug'        => '*',
                'http_method' => '',
                'http_path'   => '*',
            ],
            [
                'name'        => 'Dashboard',
                'slug'        => 'dashboard',
                'http_method' => 'GET',
                'http_path'   => '/',
            ],
            [
                'name'        => 'Login',
                'slug'        => 'auth.login',
                'http_method' => '',
                'http_path'   => "/auth/login\r\n/auth/logout",
            ],
            [
                'name'        => 'User setting',
                'slug'        => 'auth.setting',
                'http_method' => 'GET,PUT',
                'http_path'   => '/auth/setting',
            ],
            [
                'name'        => 'Auth management',
                'slug'        => 'auth.management',
                'http_method' => '',
                'http_path'   => "/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs",
            ],
        ]);

        Role::first()->permissions()->save(Permission::first());

        // add default menus.
        Menu::truncate();
        Menu::insert([
            [
                'parent_id' => 0,
                'order'     => 1,
                'title'     => 'Dashboard',
                'icon'      => 'fa-bar-chart',
                'uri'       => '/',
            ],
            [
                'parent_id' => 0,
                'order'     => 2,
                'title'     => 'User Management',
                'icon'      => 'fa-tasks',
                'uri'       => '',
            ],
            [
                'parent_id' => 2,
                'order'     => 3,
                'title'     => 'Users',
                'icon'      => 'fa-users',
                'uri'       => 'auth/users',
            ],
            [
                'parent_id' => 2,
                'order'     => 4,
                'title'     => 'Roles',
                'icon'      => 'fa-user',
                'uri'       => 'auth/roles',
            ],
            [
                'parent_id' => 2,
                'order'     => 5,
                'title'     => 'Permission',
                'icon'      => 'fa-ban',
                'uri'       => 'auth/permissions',
            ],
            [
                'parent_id' => 2,
                'order'     => 6,
                'title'     => 'Menu',
                'icon'      => 'fa-bars',
                'uri'       => 'auth/menu',
            ],
            [
                'parent_id' => 2,
                'order'     => 7,
                'title'     => 'Operation log',
                'icon'      => 'fa-history',
                'uri'       => 'auth/logs',
            ],
            [
                'parent_id' => 0,
                'order'     => 8,
                'title'     => 'Info Mantap',
                'icon'      => 'fa-newspaper-o',
                'uri'       => '',
            ],
            [
                'parent_id' => 8,
                'order'     => 9,
                'title'     => 'Tambah Info Mantap',
                'icon'      => 'fa-newspaper-o',
                'uri'       => '/info-mantap',
            ],
            /////////////////////////////////////////////////
            // [                                           //
            //     'parent_id' => 8,                       //
            //     'order'     => 10,                      //
            //     'title'     => 'Tambah Berita Inggris', //
            //     'icon'      => 'fa-newspaper-o',        //
            //     'uri'       => 'en-beritas',            //
            // ],                                          //
            /////////////////////////////////////////////////
            [
                'parent_id' => 8,
                'order'     => 10,
                'title'     => 'Kategori Info Mantap',
                'icon'      => 'fa-newspaper-o',
                'uri'       => '/kategori-info-mantap',
            ],
            [
                'parent_id' => 0,
                'order'     => 11,
                'title'     => 'Video',
                'icon'      => 'fa-video-camera',
                'uri'       => '/videos',
            ],
            [
                'parent_id' => 0,
                'order'     => 12,
                'title'     => 'Media Manager',
                'icon'      => 'fa-file',
                'uri'       => '/media',
            ],
            [
                'parent_id' => 0,
                'order'     => 13,
                'title'     => 'laporan',
                'icon'      => 'fa-newspaper-o',
                'uri'       => '',
            ],

            [
                'parent_id' => 13,
                'order'     => 14,
                'title'     => 'Tambah Laporan',
                'icon'      => 'fa-file-text',
                'uri'       => '/laporan',
            ],
            [
                'parent_id' => 13,
                'order'     => 15,
                'title'     => 'Kategori Laporan',
                'icon'      => 'fa-file-text',
                'uri'       => '/kategori-laporan',
            ],
            [
                'parent_id' => 0,
                'order'     => 16,
                'title'     => 'Navbar',
                'icon'      => 'fa-envelope-o',
                'uri'       => '',
            ],
            [
                'parent_id' => 16,
                'order'     => 17,
                'title'     => 'Tambah Navbar',
                'icon'      => 'fa-envelope-o',
                'uri'       => '/navbar',
            ],
            [
                'parent_id' => 16,
                'order'     => 18,
                'title'     => 'Kategori Navbar',
                'icon'      => 'fa-envelope-o',
                'uri'       => '/kategori-navbar',
            ],

            [
                'parent_id' => 0,
                'order'     => 19,
                'title'     => 'Tambah Banner',
                'icon'      => 'fa-gear',
                'uri'       => '/banner',
            ],
            [
                'parent_id' => 0,
                'order'     => 20,
                'title'     => 'Profil Manajemen',
                'icon'      => 'fa-gear',
                'uri'       => '',
            ],
            [
                'parent_id' => 20,
                'order'     => 21,
                'title'     => 'Tambah Profil Manajemen',
                'icon'      => 'fa-gear',
                'uri'       => '/profile-manajemen',
            ],

            [
                'parent_id' => 20,
                'order'     => 22,
                'title'     => 'Tambah kategori jabatan',
                'icon'      => 'fa-gear',
                'uri'       => '/kategori-jabatan',
            ],
            [
                'parent_id' => 0,
                'order'     => 23,
                'title'     => 'Cabang',
                'icon'      => 'fa-gear',
                'uri'       => '/kantor-cabang',
            ],
            [
                'parent_id' => 0,
                'order'     => 24,
                'title'     => 'Setting',
                'icon'      => 'fa-gear',
                'uri'       => '',
            ],
            [
                'parent_id' => 24,
                'order'     => 25,
                'title'     => 'info',
                'icon'      => 'fa-gear',
                'uri'       => '/generalinfo',
            ],
            [
                'parent_id' => 24,
                'order'     => 26,
                'title'     => 'Backup',
                'icon'      => 'fa-database',
                'uri'       => '/backup',
            ],
            [
                'parent_id' => 24,
                'order'     => 27,
                'title'     => 'smtp',
                'icon'      => 'fa-envelope-o',
                'uri'       => '/smtp',
            ],
        ]);

        // add role to menu.
        Menu::find(2)->roles()->save(Role::first());

    }
}
