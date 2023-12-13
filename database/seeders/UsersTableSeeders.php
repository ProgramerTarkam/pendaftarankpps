<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        [
            'type'=>'pengunjung',
            'name'=>'kelurahan bulusan',
            'password'=>Hash::make('kalipuro')
        ]
    );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'kelurahan gombengsari',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'desa bulusari',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'kelurahan kalipuro',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'desa kelir',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'desa ketapang',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'kelurahan klatak',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'desa pesucen',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'pengunjung',
    //         'name'=>'desa telemung',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );

    // DB::table('user')->insert(
    //     [
    //         'type'=>'admin',
    //         'name'=>'Kecamatan',
    //         'password'=>Hash::make('kalipuro')
    //     ]
    // );


    }
}
