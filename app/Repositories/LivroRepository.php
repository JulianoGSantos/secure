<?php
namespace app\Repositories;

use App\Models\Livro;
use app\Repositories\Interface\DefaultRepositoryInterface;

    class LivroRepository implements DefaultRepositoryInterface{

        protected $model;

    public function __construct(Livro $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $livro = $this->model->find($id);
        if ($livro) {
            $livro->update($data);
            return $livro;
        }
        return null;
    }

    public function delete($id)
    {
        $livro = $this->model->find($id);
        if ($livro) {
            return $livro->delete();
        }
        return false;
    }
    }
?>