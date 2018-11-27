<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Vendedor;
use Illuminate\Support\Facades\Input;

class ControllerVendedor extends BaseController {
    private $vendedor = null;
    public function __construct(Vendedor $oVendedor) {
        $this->vendedor = $oVendedor;
    }

    public function getAllVendedores() {
        return response()->json($this->vendedor->getAllVendedores(), 200)
            ->header("Content-Type","application/json");
    }

    public function getVendedor($iId) {
        $oVendedor = $this->vendedor->getVendedor($iId);
        if(!$oVendedor) {
            return response()->json(['response','Vendedor não encontrado'], 400)->header("Content-Type","application/json");
        }
        return response()->json($oVendedor, 200)->header("Content-Type","application/json");
    }

    public function saveVendedor() {
        return response()->json($this->vendedor->saveVendedor(), 201)->header("Content-Type","application/json");
    }

    public function updateVendedor($iId) {
        $oVendedor = $this->vendedor->updateVendedorFromId($iId);
        if(!$oVendedor) {
            return response()->json(['response', 'Vendedor não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oVendedor, 200)->header("Content-Type", "application/json");
    }
    public function deleteVendedor($iId) {
        $oVendedor = $this->vendedor->deleteVendedorFromId($iId);
        if(!$oVendedor) {
            return response()->json(['response', 'Vendedor não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oVendedor, 200)->header("Content-Type", "application/json");
    }
}