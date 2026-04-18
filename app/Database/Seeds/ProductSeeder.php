<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'       => 'Pensil 2B',
                'price'      => 3000.00,
                'stock'      => 100,
                'image'      => 'pensil.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Buku Tulis',
                'price'      => 5000.00,
                'stock'      => 50,
                'image'      => 'buku.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Pulpen',
                'price'      => 2500.00,
                'stock'      => 200,
                'image'      => 'pulpen.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'       => 'Penghapus',
                'price'      => 1500.00,
                'stock'      => 80,
                'image'      => 'penghapus.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // insert multiple
        $this->db->table('products')->insertBatch($data);
    }
}
