<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();



        User::factory()->create([
            'name' => 'root',
            'email' => 'root@mail.com',
            'is_Admin' => true
        ]);
        User::factory()->create([
            'name' => 'vendedor1',
            'email' => 'vendedor1@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'vendedor2',
            'email' => 'vendedor2@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'comprador1',
            'email' => 'comprador1@mail.com',
            'is_Admin' => false
        ]);
        User::factory()->create([
            'name' => 'comprador2',
            'email' => 'comprador2@mail.com',
            'is_Admin' => false
        ]);




        Product::factory()->create([
            'title' => 'Sofá',
            'description' => 'Sofá de dos plazas, comprado hace un año, medidas: 140x70x80cm',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB9aErbX4vxT8UVQPF94YoVrFDKb2zeRZXqQ&usqp=CAU',
            'klikcoinsProducts' => '200',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Peto vaquero',
            'description' => 'Peto talla 4-5 años, con etiqueta',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5ewy5AnIGL467zJb7v8Va_8QN32SFtj5p5w&usqp=CAU',
            'klikcoinsProducts' => '60',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Pantalon Rosa',
            'description' => 'Pantalon talla 4-5 años, practicamente nuevo',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG6ucC7io7jeyWrX3II46Ua-o1oFg2OsCwFg&usqp=CAU',
            'klikcoinsProducts' => '40',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Caña de pescar',
            'description' => 'Se regala por falta de uso, no pesco ni zapatos, seminueva, tambien tengo una caja de cebo',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRS5w31bLjoLfDWvesAEnYWy2TDZOwMtr2YA&usqp=CAU',
            'klikcoinsProducts' => '50',
            'user_id' => '4',
        ]);

        Product::factory()->create([
            'title' => 'Mesa de centro',
            'description' => 'Mesa de madera, usada pero estable, pesa 40kg',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwRIXHbth0EWRrI7xn675ClVTHJlCKsMxZNw&usqp=CAU',
            'klikcoinsProducts' => '60',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Cuna de viaje',
            'description' => 'Regalo cuna de viaje completamente nueva, ligera y de facíl montaje',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAtvXHs4-vUDLpLEQ4SSZclcdf1-hkVdqvyw&usqp=CAU',
            'klikcoinsProducts' => '100',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Andador bebé',
            'description' => 'Andador para bebes, con muy poco uso',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYnekakeas83eT-ODmB5umynzuexMuBPGz2Q&usqp=CAU',
            'klikcoinsProducts' => '50',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Vestido',
            'description' => 'Casi nuevo, talla M, de algodón',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThhwYkJ-UaB9lhiR1D3LKzc_4izXh5jI6PLA&usqp=CAU',
            'klikcoinsProducts' => '40',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Licuadora',
            'description' => 'Regalo de bodas de hace 40 años, nunca ha sido usada, se regala a pareja de recien casados para que no la usen nunca pero no les falte',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMdsnTCNaCvVqnOw3Gk41WR7vI0yHDxQoqLA&usqp=CAU',
            'klikcoinsProducts' => '20',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Lavadora',
            'description' => 'Lavadora de 10 años, pega chispazo de vez en cuanto pero funciona perfectamente, carga de 5kg',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRR3G99JU5BVKlqqUaj6l5gCqC8l-KNkAcfNQ&usqp=CAU',
            'klikcoinsProducts' => '80',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Bañador',
            'description' => 'Bañador nuevo, talla L',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9BA-Kt6fFmCLwMDicSKuGUzVZ1N_AljJpQQ&usqp=CAU',
            'klikcoinsProducts' => '30',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Enciclopedia infantil',
            'description' => 'Para edades hasta los 6 años',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNABmWRib83f8NKilDl83fPz8hu30ASImSuQ&usqp=CAU',
            'klikcoinsProducts' => '10',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Litera infatil',
            'description' => 'Se regala litera, 2 años de uso, peso máximo 120kg, medidas: 150x90x180',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl6WH3wHfMb0Xe4Ke4P675POD8v9d9frI3hQ&usqp=CAU',
            'klikcoinsProducts' => '150',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Libro: Cien años de soledad',
            'description' => 'Libro de García Márquez',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxfS2svemeNpByzKRRp9-cMryWWiJstKpMRA&usqp=CAU',
            'klikcoinsProducts' => '15',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Comida gatos',
            'description' => 'Comida para gatos adultos',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO3LwGhoN-BXLKbWIplHiRi4JzCFgCPIj_1w&usqp=CAU',
            'klikcoinsProducts' => '30',
            'user_id' => '4',
        ]);

        Product::factory()->create([
            'title' => 'Libro: Noticia de un secuestro',
            'description' => 'Libro de García Márquez',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_AxRvnE_swgnFAduEr3JLgVfxwlL5PXLC7Q&usqp=CAU',
            'klikcoinsProducts' => '15',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Patines infantiles',
            'description' => 'Patines practicamente nuevos, talla 32, de Frozen',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCWy0Ff2mvrI7br16TOH_yG3WIwOZ_Shv9bw&usqp=CAU',
            'klikcoinsProducts' => '80',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Bicicleta estática',
            'description' => 'Se regala perchero tambien conocido como bicicleta estática por falta de uso y espacio, me salia mejor comprar un armario',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDqu7CcHSznvrn39HxuW8e2pDVfeC-fiDU6A&usqp=CAU',
            'klikcoinsProducts' => '100',
            'user_id' => '5',
        ]);
        Product::factory()->create([
            'title' => 'Visca Barça',
            'description' => 'Se regala el bien más preciado de mi marido por serme infiel, es talla L y siempre se ha cuidado como si fuera oro',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMN_mMaJ7LxnBYaYuNtPdjEViY0m4nhzE0pg&usqp=CAU',
            'klikcoinsProducts' => '30',
            'user_id' => '5',
        ]);
        Product::factory()->create([
            'title' => 'Tabasco casero',
            'description' => 'Se regalan 20 botes de tabasco casero, nivel infernal porque ni yo lo soporto, solo para gente que aguente bien el hot',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFw7vP1wDB56Ie7uJ84wMhhDWqr7f8XG0Edw&usqp=CAU',
            'klikcoinsProducts' => '40',
            'user_id' => '5',
        ]);

        Product::factory()->create([
            'title' => 'Televisión antigua',
            'description' => 'Se regala televisión de los años 60, sin funcionalidad, solo decoración',
            'image' => 'https://i.blogs.es/3dc203/tv/840_560.jpg',
            'klikcoinsProducts' => '130',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Juego de mesas y sillas',
            'description' => 'Ideal juego de comedor, con sillas y mesa de madera con poco uso.',
            'image' => 'https://cdn.wallapop.com/images/10420/az/sc/__/c10420p664771374/i2105233936.jpg?pictureSize=W320',
            'klikcoinsProducts' => '70',
            'user_id' => '3',
        ]);
        Product::factory()->create([
            'title' => 'Chaqueta de cuero',
            'description' => 'Perfecto para motoristas intrepidos, algo gastada pero sin roturas',
            'image' => 'https://shop.r10s.jp/jumblestore/cabinet/1767/2337830101767-01.jpg',
            'klikcoinsProducts' => '60',
            'user_id' => '2',
        ]);
        Product::factory()->create([
            'title' => 'Plancha',
            'description' => 'Regalo plancha en buen estado, funciona correctamente',
            'image' => 'https://img.clasf.mx/2019/06/24/Plancha-Usada-Black-And-Decker-20190624184144.5187400015.jpg',
            'klikcoinsProducts' => '20',
            'user_id' => '5',
        ]);
        Product::factory()->create([
            'title' => 'Portatil',
            'description' => 'Se regala portatil de 7 años de antiguedad en perfectas condiciones de uso, 15 pulgadas',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2zKCKZNz7pzEUgc6LkWM-QeGYZbWvCTEOiw&usqp=CAU',
            'klikcoinsProducts' => '50',
            'user_id' => '4',
        ]);
        Product::factory()->create([
            'title' => 'Productos de huerto',
            'description' => 'Se regala surtido de huerto ecológico',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdI65a8taDE_2sA2n_yMuM75lGi-cYphvS7ruP2MO7CxwxPbi3yM9mrVWxY0o&usqp=CAc ',
            'klikcoinsProducts'=> '40',
            'user_id' => '5',
        ]);
        Product::factory()->create([
            'title' => 'Raquetas',
            'description' => 'Jego de raquetas para aficionados, muy buen estado',
            'image' => 'https://cdn.wallapop.com/images/10420/9c/d8/__/c10420p564968760/i1702690348.jpg?pictureSize=W640',
            'klikcoinsProducts' => '20',
            'user_id' => '2',
            ]);
        }
}
