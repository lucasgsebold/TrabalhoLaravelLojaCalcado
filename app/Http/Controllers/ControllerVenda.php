<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Venda;
use Illuminate\Support\Facades\Input;

class ControllerVenda extends BaseController {
    private $venda = null;
    public function __construct(Venda $oVenda) {
        $this->venda = $oVenda;
    }

    public function getAllVendas() {
        return response()->json($this->venda->getAllVendas(), 200)
            ->header("Content-Type","application/json");
    }

    public function getVenda($iId) {
        $oVenda = $this->venda->getVenda($iId);
        if(!$oVenda) {
            return response()->json(['response','Venda não encontrada'], 400)->header("Content-Type","application/json");
        }
        return response()->json($oVenda, 200)->header("Content-Type","application/json");
    }

    public function saveVenda() {
        return response()->json($this->venda->saveVenda(), 201)->header("Content-Type","application/json");
    }

    public function updateVenda($iId) {
        $oVenda = $this->venda->updateVendaFromId($iId);
        if(!$oVenda) {
            return response()->json(['response', 'Venda não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oVenda, 200)->header("Content-Type", "application/json");
    }
    public function deleteVenda($iId) {
        $oVenda = $this->venda->deleteVendaFromId($iId);
        if(!$oVenda) {
            return response()->json(['response', 'Venda não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oVenda, 200)->header("Content-Type", "application/json");
    }
}   