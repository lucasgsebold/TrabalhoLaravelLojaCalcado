<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model {
    protected $table      = 'vendedor';
    protected $fillable   = array('vencodigo', 'vennome', 'vencpf', 'venemail');
    protected $primaryKey = 'vencodigo';
    public $timestamps    = false;

    public function getAllVendedores() {
        return self::all();
    }

    public function getVendedor($iId) {
        $oVendedor = self::find($iId);
        if(is_null($oVendedor)) {
            return false;
        }
        return $oVendedor;
    }

    public function deleteVendedorFromId($iId) {
        $oVendedor = self::find($iId);
        if(is_null($oVendedor)) {
            return false;
        }
        return $oVendedor->delete();
    }

    public function updateVendedorFromId($iId) {
        $oVendedor = self::find($iId);
        if(is_null($oVendedor)) {
            return false;
        }
        $oInput = Input::all();
        $oVendedor->fill($oInput);
        $oVendedor->save();
        return $oVendedor;
    }

    public function saveVendedor() {
        $oInput = Input::all();
        $oVendedor = new Vendedor($oInput);
        $oVendedor->save();
        return $oVendedor;
    }
}