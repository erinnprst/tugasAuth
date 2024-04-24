<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class CreateUsersSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run(): void
{
$users = [
[
'name'=>'superadmin User',
'email'=>'superadmin@email.com',
'type'=>0,
'password'=> bcrypt('123456'),
],
[
'name'=>'admin user',
'email'=>'admin@email.com',
'type'=> 1,
'password'=> bcrypt('123456'),
],
[
'name'=>'dosen user',
'email'=>'dosen@email.com',
'type'=>2,
'password'=> bcrypt('123456'),
],
[
    'name'=>'mahasiswa user',
    'email'=>'mahasiswa@email.com',
    'type'=>3,
    'password'=> bcrypt('123456'),
    ],
[
    'name'=>'tendik user',
    'email'=>'tendik@email.com',
    'type'=>4,
    'password'=> bcrypt('123456'),
    ],
[
    'name'=>'adminakademik user',
    'email'=>'adminakademik@email.com',
    'type'=>5,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'adminkeuangan user',
    'email'=>'adminkeuangan@email.com',
    'type'=>6,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'direktur user',
    'email'=>'direktur@email.com',
    'type'=>7,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'wakildirektur1 user',
    'email'=>'wakildirektur1@email.com',
    'type'=>8,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'wakildirektur2 user',
    'email'=>'wakildirektur2@email.com',
    'type'=>9,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'wakildirektur3 user',
    'email'=>'wakildirektur3@email.com',
    'type'=>10,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'adminlppm user',
    'email'=>'adminlppm@email.com',
    'type'=>11,
    'password'=> bcrypt('123456'),
],
[
    'name'=>'adminsdm user',
    'email'=>'adminsdm@email.com',
    'type'=>12,
    'password'=> bcrypt('123456'),
],
];
foreach ($users as $key => $user) {
User::create($user);
}
}
}