<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use Exception;
use Illuminate\Http\Request;

class DesenvolvedorController extends Controller
{
    private $desenvolvedor;

    public function __construct(Desenvolvedor $desenvolvedor)
    {
        $this->desenvolvedor = $desenvolvedor;
    }

    public function get($desenvolvedor)
    {        
        try {
            if ($this->desenvolvedor->find($desenvolvedor)) {
                return response($this->desenvolvedor->find($desenvolvedor), 200); //OK
            } else {
                return response()->json(['data' => ['message' => 'Nenhum desenvolvedor encontrado!']], 404); //OK
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return response('', 404);
        }
    }

    public function getAll()
    {
        try {
            return response($this->desenvolvedor->all(), 200);
        } catch (Exception $e) {
            return print_r($e->getMessage());
        }
    }

    public function post(Request $request)
    {
        try {
            $this->desenvolvedor->create($request->all());
            return response()->json(['data' => ['message' => 'Desenvolvedor cadastrado!']], 201); //OK
        } catch (Exception $e) {
            print_r($e->getMessage());
            return response()->json(['data' => ['message' => 'Erro ao cadastrar desenvolvedor!']], 400); //OK
        }
    }

    public function put(Request $request, $id)
    {
        try {
            if ($desenvolvedor = Desenvolvedor::find($id)) {
                $desenvolvedor->nome = $request->input('nome');
                $desenvolvedor->sexo = $request->input('sexo');
                $desenvolvedor->idade = $request->input('idade');
                $desenvolvedor->hobby = $request->input('hobby');
                $desenvolvedor->dataNascimento = $request->input('dataNascimento');
                $desenvolvedor->save();

                return response()->json(['data' => ['message' => 'Desenvolvedor alterado!']], 200); //OK
            } else {
                return response()->json(['data' => ['message' => 'Desenvolvedor não encontrado!']], 400); //OK
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return response('', 400);
        }
    }

    public function delete($desenvolvedor)
    {
        try{
            $desenvolvedor = $this->desenvolvedor->find($desenvolvedor);
            if(!is_null($desenvolvedor)) {
                $desenvolvedor->delete(); 
                return response('', 204); //OK
            } else {
                return response()->json(['data' => ['message' => 'Desenvolvedor não encontrado, portanto não pode ser excluído!']], 400); //OK
            }
        } catch (Exception $e) {
            print_r($e->getMessage());
            return response('', 400);
        }
    }
}
