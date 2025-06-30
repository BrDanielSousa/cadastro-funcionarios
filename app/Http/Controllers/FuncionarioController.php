<?php

namespace App\Http\Controllers;

use App\Http\Requests\FuncionarioRequest;
use App\Http\Requests\StoreFuncionarioRequest;
use App\Http\Requests\UpdateFuncionarioRequest;
use App\Services\FuncionarioService;
use Illuminate\Http\JsonResponse;

class FuncionarioController extends Controller
{
    protected $service;

    public function __construct(FuncionarioService $service)
    {
        $this->service = $service;
    }

    public function index(): JsonResponse
    {
        $funcionarios = $this->service->list();
        return response()->json($funcionarios);
    }

    public function store(StoreFuncionarioRequest $request): JsonResponse
    {
        $funcionario = $this->service->create($request->validated());
        return response()->json(['funcionario' => $funcionario, 'message' => 'Funcionário criado com sucesso'], 201);
    }

    public function show($id): JsonResponse
    {
        $funcionario = $this->service->get($id);
        return response()->json($funcionario);
    }

    public function update(UpdateFuncionarioRequest $request, $id): JsonResponse
    {
        $funcionario = $this->service->update($id, $request->validated());
        return response()->json(['funcionario' => $funcionario, 'message' => 'Funcionário atualizado com sucesso']);
    }

    public function destroy($id): JsonResponse
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Funcionário deletado com sucesso']);
    }
}
