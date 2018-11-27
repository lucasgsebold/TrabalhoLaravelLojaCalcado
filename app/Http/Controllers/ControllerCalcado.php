<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Model\Calcado;
use Illuminate\Support\Facades\Input;

class ControllerCalcado extends BaseController {
    private $calcado = null;
    public function __construct(Calcado $oCalcado) {
        $this->calcado = $oCalcado;
    }

    public function getAllCalcados() {
        return response()->json($this->calcado->getAllCalcados(), 200)
            ->header("Content-Type","application/json");
    }

    public function getCalcado($iId) {
        $oCalcado = $this->calcado->getCalcado($iId);
        if(!$oCalcado) {
            return response()->json(['response','Calçado não encontrado'], 400)->header("Content-Type","application/json");
        }
        return response()->json($oCalcado, 200)->header("Content-Type","application/json");
    }

    public function saveCalcado() {
        return response()->json($this->calcado->saveCalcado(), 201)->header("Content-Type","application/json");
    }

    public function updateCalcado($iId) {
        $oCalcado = $this->calcado->updateCalcadoFromId($iId);
        if(!$oCalcado) {
            return response()->json(['response', 'Calçado não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oCalcado, 200)->header("Content-Type", "application/json");
    }
    public function deleteCalcado($iId) {
        $oCalcado = $this->calcado->deleteCalcadoFromId($iId);
        if(!$oCalcado) {
            return response()->json(['response', 'Calçado não encontrado'], 400)->header("Content-Type", "application/json");
        }
        return response()->json($oCalcado, 200)->header("Content-Type", "application/json");
    }
}