<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'name', 'price', 'stock', 'image'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'product_name' => 'required|min_length[3]',
        'price' => 'required|decimal',
        'stock' => 'required|integer',
        'product_image' => [
            'rules' => 'uploaded[product_image]|max_size[product_image,2048]|is_image[product_image]',
        ]
    ];
    protected $validationMessages   = [
        'product_name' => [
            'required' => 'Product name is required.',
            'min_length' => 'Product name must be at least 3 characters long.',
        ],
        'price' => [
            'required' => 'Price is required.',
            'decimal' => 'Price must be a valid decimal number.'
        ],
        'stock' => [
            'required' => 'Stock is required.',
            'integer' => 'Stock must be a valid integer.'
        ],
        'product_image' => [
            'uploaded' => 'Product image is required.',
            'max_size' => 'Product image must not exceed 2MB in size.',
            'is_image' => 'Uploaded file must be a valid image.'
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
