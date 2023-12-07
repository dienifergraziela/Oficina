<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\Ordem;

class Ordens extends BaseController
{
    private $ordemModel;

    public function __construct()
    {
        $this->ordemModel = new \App\Models\OrdemModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'listando as ordens',
            'ordens' => $this->ordemModel->findAll(),
        ];

        return view('Admin/Ordens/index', $data);
    }


    public function criar()
    {
        $data = [
            'dono' => $this->request->getPost('dono'),
            'problema' => $this->request->getPost('problema'),
            'custo' => $this->request->getPost('custo'),
            'carro' => $this->request->getPost('carro'),
            'placa' => $this->request->getPost('placa'),
            'pronto' => $this->request->getPost('pronto'),
        ];

        // Verifica se todos os campos obrigatórios estão presentes no array $data
        if (empty($data['dono']) || empty($data['problema']) || empty($data['custo']) || empty($data['carro']) || empty($data['placa']) || empty($data['pronto'])) {
            return redirect()->back()->with('errors', 'Todos os campos são obrigatórios.');
        }

        $ordemModel = new ordemModel();
        $ordem_id = $ordemModel->saveOrdem($data);

        // return $ordem_id;
        return view('Admin/Ordens/show', $data);

    }

    // public function criar()
    // {
    //     $ordem = new Ordem();

    //     if ($this->request->getMethod() == 'post') {
    //         $post = $this->request->getPost();
    //         $ordem->fill($post);

    //         if ($this->ordemModel->save($ordem)) {
    //             return redirect()->to(site_url("admin/ordens/show/{$this->ordemModel->getInsertID()}"));
    //         } else {
    //             return redirect()->back()->with('errors', $this->ordemModel->errors());
    //         }
    //     }

    //     $data = [
    //         'titulo' => "Criando nova ordem",
    //         'ordem' => $ordem,
    //     ];
    //     return view('Admin/Ordens/show', $data);
    // }

    public function show($id = null)
    {
        $ordem = $this->buscaOrdemOu404($id);

        $data = [
            'titulo' => "Detalhando a ordem $ordem->id",
            'ordem' => $ordem,
        ];
        return view('Admin/Ordens/show', $data);

    }

    public function editar($id = null)
    {
        $ordem = $this->buscaOrdemOu404($id);

        $data = [
            'titulo' => "Editando a ordem de serviço do cliente $ordem->dono",
            'usuario' => $ordem,
        ];
        return view('Admin/Ordens/editar', $data);

    }

    public function atualizar($id = null)
    {

        if ($this->request->getMethod() == 'POST') {
            $ordem = $this->buscaOrdemOu404($id);
            $post = $this->request->getPost();


            $ordem->fill($post);

            if ($this->ordemModel->protect(false)->save($ordem)) {
                return redirect()->to(site_url("admin/ordens/show/$ordem->id"));
            } else {
                return redirect()->back();
            }

        } else {
            return redirect()->back()->with('info', 'por favor envie um post');
        }

    }

    private function buscaOrdemOu404(int $id = null)
    {
        if (!$id || !$ordem = $this->ordemModel->where('id', $id)->first()) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos a ordem $id");
        }
        return $ordem;
    }
}