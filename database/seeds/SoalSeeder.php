<?php

use Illuminate\Database\Seeder;
use App\Soal;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soal::create([
            'pertanyaan'=> 'Fungsi dari kelas pada OOP?', 
            'benar'=> 'Prototipe yang digunakan untuk menciptakan objek', 
            'salah1'=> 'Kombinasi data dan fungsionalitas dalam sebuah unit tunggal', 
            'salah2'=> 'Mewarisi sifat dari kelas lain yang sudah ada',
        ]);

        Soal::create([ 
            'pertanyaan'=> 'Yang merupakan framework javascript', 
            'benar'=> 'Angular, Backbone, Ember', 
            'salah1'=> 'Symfony, Yii, Ionic', 
            'salah2'=> 'Django, Selenium, CherryPy'
        ]);

        Soal::create([ 
            'pertanyaan'=> 'Manakah bahasa pemrograman yang paling elegan berikut ini?', 
            'benar'=> 'Javascript', 
            'salah1'=> 'Ruby', 
            'salah2'=> 'PHP'
        ]);

        Soal::create([ 
            'pertanyaan'=> 'Bagaimana cara memanggil pustaka pada C#?', 
            'benar'=> 'Using', 
            'salah1'=> 'Include', 
            'salah2'=> 'Import'
        ]);

        Soal::create([ 
            'pertanyaan'=> 'Anda bermaksud menyimpan angka pecahan, maka variabel yang digunakan adalah?', 
            'benar'=> 'Float', 
            'salah1'=> 'Boolean', 
            'salah2'=> 'Integer'
        ]);

        Soal::create([ 
            'pertanyaan'=> 'Yang bukan tag HTML', 
            'benar'=> 'View', 
            'salah1'=> 'Div', 
            'salah2'=> 'Label'
        ]);

        Soal::create([
            'pertanyaan'=> '
                Class Hello {
                    public static void main(String[] args) {
                        System.out.println("Hello World");
                    }
                }
            ', 
            'benar'=> '', 
            'salah1'=> '', 
            'salah2'=> ''
        ]);

        Soal::create([ 
            'pertanyaan'=> '
                $tebakan= 5;
                if ($tebakan < 5) {
                    echo "Tebakan terlalu rendah!";
                }
                else if ($tebakan > 5) {
                    echo "Tebakan terlalu tinggi!";
                }
                else {
                    echo "Tebakan anda tepat!";
                }
            ', 
            'benar'=> '', 
            'salah1'=> '', 
            'salah2'=> ''
        ]);

        Soal::create([ 
            'pertanyaan'=> '
                <!DOCTYPE html>
                <html>
                    <body>
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#news">News</a></li>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#about">About</a></li>
                        </ul>
                    </body>
                </html>
            ', 
            'benar'=> '', 
            'salah1'=> '', 
            'salah2'=> ''
        ]);
    }
}