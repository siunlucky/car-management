<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\User;
use App\Models\Driver;
use App\Models\Office;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '1'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '1'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '1'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '1'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '2'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '2'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '2'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '2'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '3'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '3'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '3'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '3'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '4'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '4'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '4'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '4'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '5'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '5'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '5'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '5'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '6'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '6'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '6'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '6'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '7'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '7'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '7'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'unavailable',
            'id_office' => '7'
        ]);

        Car::create([
            'name_car' => 'Dump Truck',
            'photo_car' => 'truck_dump.jpeg',
            'status' => 'available',
            'id_office' => '8'
        ]);
        Car::create([
            'name_car' => 'UD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '8'
        ]);
        Car::create([
            'name_car' => 'MD Truck',
            'photo_car' => 'truck_ud.jpeg',
            'status' => 'available',
            'id_office' => '8'
        ]);
        Car::create([
            'name_car' => 'Isuzu Truck',
            'photo_car' => 'truck_isuzu.jpg',
            'status' => 'available',
            'id_office' => '8'
        ]);

        User::create([
            'name' => 'head1',
            'email' => 'head1@gmail.com',
            'password' => bcrypt('head1'),
            'role' => 'head',
            'id_office' => '1'
        ]);

        User::create([
            'name' => 'superior1',
            'email' => 'superior1@gmail.com',
            'password' => bcrypt('superior1'),
            'role' => 'superior',
            'id_office' => '1'
        ]);


        User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin1'),
            'role' => 'admin',
            'id_office' => '1'
        ]);


        Office::create([
            'name_office' => 'PT. Sekawan Media (Pusat)',
            'type' => 'Head Office',
            'address' => 'Malang',
            'phone_number' => '081401240142',
            'photo_office' => 'sekawan_media.jpeg'
        ]);

        Office::create([
            'name_office' => 'PT. Sekawan Media (Cabang)',
            'type' => 'Branch Office',
            'address' => 'Surabaya Timur',
            'phone_number' => '081451230444',
            'photo_office' => 'sekawan_media.jpeg'
        ]);

        Office::create([
            'name_office' => 'Tambang Surabaya Utara',
            'type' => 'Mine',
            'address' => 'Surabaya Utara',
            'phone_number' => '081451230444',
            'photo_office' => 'tambang.jpeg'
        ]);

        Office::create([
            'name_office' => 'Tambang Kepanjen',
            'type' => 'Mine',
            'address' => 'Kepanjen',
            'phone_number' => '085108277777',
            'photo_office' => 'tambang.jpeg'
        ]);

        Office::create([
            'name_office' => 'Tambang Yogyakarta',
            'type' => 'Mine',
            'address' => 'Yogyakarta',
            'phone_number' => '085123477517',
            'photo_office' => 'tambang.jpeg'
        ]);

        Office::create([
            'name_office' => 'Tambang Jakarta Selatan',
            'type' => 'Mine',
            'address' => 'Jakarta Selatan',
            'phone_number' => '081234628444',
            'photo_office' => 'tambang.jpeg'
        ]);

        Office::create([
            'name_office' => 'Tambang Bogor',
            'type' => 'Mine',
            'address' => 'Bogor',
            'phone_number' => '085273852714',
            'photo_office' => 'tambang.jpeg'
        ]);


        Office::create([
            'name_office' => 'Tambang Denpasar',
            'type' => 'Mine',
            'address' => 'Denpasar',
            'phone_number' => '082731575182',
            'photo_office' => 'tambang.jpeg'
        ]);

        Driver::create([
            'name_driver' => 'Sumanto',
            'address' => 'Malang 1',
            'phone_number' => '0241813128731'
        ]);

        Driver::create([
            'name_driver' => 'Ariq',
            'address' => 'Surabaya',
            'phone_number' => '0241813128731',
            'status' => 'ready'
        ]);

        Driver::create([
            'name_driver' => 'Alan',
            'address' => 'Malang 2',
            'phone_number' => '024152343523',
            'status' => 'ready'
        ]);

        Driver::create([
            'name_driver' => 'Mamad',
            'address' => 'Bekasi',
            'phone_number' => '024182241231',
            'status' => 'ready'
        ]);
    }
}
