<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;
use Config\App;

class UsuariosController extends BaseController
{

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Listando Usuários',
        ];

        return view('usuarios/index', $data);
    }

    public function recuperaUsuarios()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $atributos = [
            'id',
            'nome',
            'email',
            'ativo',
            'imagem',
        ];

        $usuarios = $this->usuarioModel->select($atributos)->findAll();
        $data = [];
        foreach ($usuarios as $usuario) {

            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => anchor('UsuariosController/exibir/' . $usuario->id, esc($usuario->nome), 'title="Exibir ' . esc($usuario->nome) . '"'),
                'email' => esc($usuario->email),
                'ativo' => ($usuario->ativo == true ? '<span class="text-success"><i class="fa fa-unlock-alt"></i> Ativo</span>' : '<span class="text-warning"><i class="fa fa-lock"></i> Inativo</span>'),

            ];
        }
        $retorno = [
            'data' => $data
        ];

        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        // dd($usuario);

        $data = [
            'titulo' => "Exibindo dados do usuário " . esc($usuario->nome),
            'usuario' => $usuario,
        ];
        return view('usuarios/exibir', $data);
    }

    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Não encontramos o usuário {$id}");
        }

        return $usuario;
    }

    public function editar(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Editando dados do usuário " . esc($usuario->nome),
            'usuario' => $usuario,
        ];
        return view('usuarios/editar', $data);
    }

    public function atualizar(){

        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        $retorno ['token'] = csrf_hash();

        // $retorno['info'] = 'Essa é a mensagem de informação';

        return $this->response->setJSON($retorno);


        // $postr = $this->request->getPost();

        // echo "<pre>";
        // print_r($postr);
        // echo "</pre>";

        exit();

    }
}
