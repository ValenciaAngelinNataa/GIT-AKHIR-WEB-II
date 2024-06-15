<?php namespace App\Controllers;

use App\Models\PostModel;

class Post extends BaseController
{
    /**
     *
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = new PostModel();
        $this->helpers = ['form', 'url'];

    }

    public function index()
    {
        $data = [
            'Buku' => $this->model->paginate(10),
            'pager' => $this->model->pager,
            'title' => 'BUKU LIST'
        ];

        return view('posts/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Create new post'];

        return view('posts/create', $data);
    }

    public function store()
    {
        $validationRules = [
            'judul' => 'required|string|max_length[255]',
            'penulis' => 'required|string|max_length[255]',
            'penerbit' => 'required|string|max_length[255]',
            'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
        ];

        $validationMessages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
                'string' => 'Judul harus berupa string.',
                'max_length' => 'Judul tidak boleh lebih dari 255 karakter.'
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
                'string' => 'Penulis harus berupa string.',
                'max_length' => 'Penulis tidak boleh lebih dari 255 karakter.'
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
                'string' => 'Penerbit harus berupa string.',
                'max_length' => 'Penerbit tidak boleh lebih dari 255 karakter.'
            ],
            'tahun_terbit' => [
                'required' => 'Tahun terbit harus diisi.',
                'numeric' => 'Tahun terbit harus berupa angka.',
                'greater_than' => 'Tahun terbit harus lebih besar dari 1800.',
                'less_than' => 'Tahun terbit harus lebih kecil dari 2024.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'judul' => $this->request->getPost('judul'),
            'penulis' => $this->request->getPost('penulis'),
            'penerbit' => $this->request->getPost('penerbit'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit')
        ];

        if ($this->model->save($data)) {
            session()->setFlashdata('success', 'Buku berhasil ditambahkan.');
            return redirect()->to(base_url('posts/index'));
        } else {
            session()->setFlashdata('error', 'Terjadi masalah saat menambahkan buku, silakan coba lagi.');
            return redirect()->back();
        }
  }

  public function edit($id)
  {
      $post = $this->model->find($id);

      if (empty($post)) {
          session()->setFlashdata('error','Post not found');
          return redirect()->back();
      }

      return view('posts/edit', ['data' => $post]);

  }

  public function update($id)
  {
      $post = $this->model->find($id);

      if (empty($post)) {
          session()->setFlashdata('error','Post not found');
          return redirect()->back();
      }

      $data = $this->request->getPost(['judul', 'penulis', 'penerbit', 'tahun_terbit']);

      if (! $this->validateData($data, $this->model->validationRules)) {
          return $this->create();
      }

      $updatedPost = $this->validator->getValidated();

      $update = $this->model->update($post['id'], $updatedPost);

      if ($update) {
          session()->setFlashdata('success', 'Post has been updated successfully');
          return redirect()->to(base_url('posts/index'));
      } else {
          session()->setFlashdata('error', 'Some problems occured, please try again.');
          return redirect()->back();
      }
  }

  public function destroy($id)
  {

      if (empty($id)) {
          return redirect()->to(base_url('posts/index'));
      }

      $delete = $this->model->delete($id);

      if ($delete) {
          session()->setFlashdata('success', 'Post has been removed successfully.');
          return redirect()->to(base_url('posts/index'));
      } else {
          session()->setFlashdata('error', 'Some problems occured, please try again.');
          return redirect()->to(base_url('posts/index'));
      }

  }
}
