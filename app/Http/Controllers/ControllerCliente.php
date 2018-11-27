<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Cliente;
use Illuminate\Support\Facades\Input;

class ControllerCliente extends BaseController {
    private $cliente = null;
    public function __construct(Cliente $oCliente) {
        $this->cliente = $oCliente;
    }

    public function getAllClientes() {
        return response()->json($this->cliente->getAllClientes(), 200)
            ->header("Content-Type","application/json");
    }

    public function getCliente($iId) {
        $oCliente = $this->cliente->getCliente($iId);
        if(!$oCliente) {
            return response()->json(['response','Cliente não encontrado'], 400)->header("Content-Type","application/json");
        }
        return response()->json($oCliente, 200)->header("Content-Type","application/json");
    }

    public function saveCliente() {
        return response()->json($this->cliente->saveCliente(), 201)->header("Content-Type","application/json");
    }

    public function updateCliente($iId) {
        $oCliente = $this->cliente->updateClienteFromId($iId);
        if(!$oCliente) {
            return response()->json(['response', 'Cliente não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oCliente, 200)->header("Content-Type", "application/json");
    }
    public function deleteCliente($iId) {
        $oCliente = $this->cliente->deleteClienteFromId($iId);
        if(!$oCliente) {
            return response()->json(['response', 'Cliente não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oCliente, 200)->header("Content-Type", "application/json");
    }
}