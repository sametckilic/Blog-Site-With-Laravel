<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("poststable")->insert([
            'title'=>'Title 1',
            'article'=>"Nunc eget odio eu odio lobortis imperdiet at et massa. Nullam blandit, magna et finibus vehicula, diam ligula venenatis magna, interdum fermentum nunc eros et nibh. Donec id mauris turpis. Morbi vitae mi lacinia, rhoncus nisi at, ultricies nulla. Nam a eros non risus lacinia ultricies. Nullam sed dapibus lectus, nec ultricies arcu. Nam pulvinar nisi ac justo sollicitudin, sit amet facilisis augue pellentesque. Integer sollicitudin nisi vel lacus maximus malesuada. Nullam ut felis eros. Maecenas vestibulum urna nec interdum pretium. Cras sed tempus erat, eget viverra orci. Cras aliquam est sed ante elementum gravida. Vivamus sollicitudin lorem nec turpis tempus molestie at at elit. Proin ultricies tincidunt lorem, fermentum vestibulum leo commodo id.",
            'category'=>"Love",
            'photo'=>"https://i.cnnturk.com/i/cnnturk/75/740x416/6085f56bb57f150fbc263ee8.jpg"

        ]);
        DB::table("poststable")->insert([
            'title'=>'Title 2',
            'article'=>"Integer quis odio ac dui interdum tempor accumsan at lacus. Proin vel turpis vel nulla rutrum tempus. Integer a elit eu augue molestie accumsan a at felis. Nam sit amet placerat ligula. Quisque congue odio eu porta tristique. Nulla mi odio, tempor nec felis ut, vulputate porttitor lacus. Praesent blandit fermentum velit et laoreet. Suspendisse fermentum, felis id sagittis eleifend, nulla augue pharetra ante, vel pretium turpis nibh a justo. Mauris tempor ullamcorper velit, in pharetra nulla venenatis in. In gravida feugiat mi ut tincidunt. Duis non urna ut sapien fermentum consequat vel at sapien. Fusce id risus eu dolor pharetra gravida. Vestibulum vel est porttitor, bibendum turpis rutrum, iaculis augue.",
            'category'=>"Death",
            'photo'=>"https://images.unsplash.com/photo-1516431883659-655d41c09bf9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c25vd2luZ3xlbnwwfHwwfHw%3D&w=1000&q=80"
        ]);
        DB::table("poststable")->insert([
            'title'=>'Title 3',
            'article'=>"Integer pharetra, sapien sit amet laoreet rhoncus, orci arcu semper nisl, et blandit urna felis sed lacus. Maecenas eget magna a odio pellentesque dapibus non ac nulla. Aenean rutrum ornare dui, vel mollis metus semper vitae. Pellentesque vel nulla enim. Duis vitae augue a risus ullamcorper rhoncus. Vestibulum nec fermentum nulla, et vestibulum nisl. Morbi imperdiet sem suscipit, gravida erat nec, malesuada leo. Praesent nulla magna, ullamcorper commodo tempor ut, dictum nec neque. Maecenas sed massa vel justo accumsan fermentum. Nulla ac elit rhoncus, ornare orci non, posuere quam.",
            'category'=>"Robots",
            'photo'=>"https://images.unsplash.com/photo-1488866022504-f2584929ca5f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bmlnaHR8ZW58MHx8MHx8&w=1000&q=80"

        ]);
        DB::table("poststable")->insert([
            'title'=>'Title 4',
            'article'=>"Sed ante tellus, mattis sit amet sagittis a, imperdiet non mi. Pellentesque ultricies diam fringilla dui ultricies mollis sed sit amet metus. Fusce bibendum ut tellus at ultrices. Donec eu ornare dolor, sit amet ornare orci. Donec fringilla lacus ligula, rhoncus pulvinar ipsum malesuada vitae. Maecenas id semper nisl. Quisque neque tortor, molestie sed enim et, aliquet laoreet augue. In facilisis lorem sed massa semper malesuada. Phasellus vitae sollicitudin elit, sit amet euismod sapien. Nam eu ante in nibh semper venenatis. Curabitur orci dolor, varius id molestie quis, bibendum ut augue. Suspendisse leo est, dapibus quis velit sed, pharetra consectetur nulla. Sed at urna lacinia, placerat tellus luctus, laoreet justo. Aliquam feugiat massa nec ex cursus, a pharetra mi pharetra.",
            'category'=>"Robots",
            'photo'=>"https://parispeaceforum.org/wp-content/uploads/2021/10/NET-ZERO-SPACE-INITIATIVE-1.png"

        ]);
    }
}
