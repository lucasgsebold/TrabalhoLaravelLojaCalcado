<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * @package Model
 * @author  Lucas Gustavo Sebold
 * @since   17/11/2018
 */
class Calcado extends Model {
    protected $table      = 'calcado';
    protected $fillable   = array('calcodigo', 'calmarca', 'caltamanho', 'calquantidade', 'calvalor');
    protected $primaryKey = 'calcodigo';
    public    $timestamps = false;

    public function getAllCalcados() {
        return self::all();
    }

    public function getCalcado($iId) {
        $oCalcado = self::find($iId);
        if(is_null($oCalcado)) {
            return false;
        }
        return $oCalcado;
    }

    public function deleteCalcadoFromId($iId) {
        $oCalcado = self::find($iId);
        if(is_null($oCalcado)) {
            return false;
        }
        return $oCalcado->delete();
    }

    public function updateCalcadoFromId($iId) {
        $oCalcado = self::find($iId);
        if(is_null($oCalcado)) {
            return false;
        }
        $oInput = Input::all();
        $oCalcado->fill($oInput);
        $oCalcado->save();
        return $oCalcado;
    }

    public function saveCalcado() {
        $oInput = Input::all();
        $oCalcado = new Calcado($oInput);
        $oCalcado->save();
        return $oCalcado;
    }
 }
