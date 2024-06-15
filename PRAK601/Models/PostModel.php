<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'Buku';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    protected $validationRules = [
        'judul' => 'required|max_length[255]',
        'penulis' => 'required|max_length[255]',
        'penerbit' => 'required|max_length[255]',
        'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
    ];

    protected $validationMessages = [
        'judul' => [
            'required' => 'Judul harus diisi.',
            'max_length' => 'Judul tidak boleh lebih dari 255 karakter.'
        ],
        'penulis' => [
            'required' => 'Penulis harus diisi.',
            'max_length' => 'Penulis tidak boleh lebih dari 255 karakter.'
        ],
        'penerbit' => [
            'required' => 'Penerbit harus diisi.',
            'max_length' => 'Penerbit tidak boleh lebih dari 255 karakter.'
        ],
        'tahun_terbit' => [
            'required' => 'Tahun terbit harus diisi.',
            'numeric' => 'Tahun terbit harus berupa angka.',
            'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
            'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'
        ]
    ];

    protected $skipValidation = false;
}
