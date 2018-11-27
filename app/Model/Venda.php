<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model {
    protected $table      = 'venda';
    protected $fillable   = array('vendacodigo', 'vendadata', 'vendaformapag', 'clicodigo', 'vencodigo', 'calcodigo');
    protected $primaryKey = 'vendacodigo';
    public $timestamps    = false;

    public function getAllVendas() {
        return self::all();
    }

    public function getVenda($iId) {
        $oVenda = self::find($iId);
        if(is_null($oVenda)) {
            return false;
        }
        return $oVenda;
    }

    public function deleteVendaFromId($iId) {
        $oVenda = self::find($iId);
        if(is_null($oVenda)) {
            return false;
        }
        return $oVenda->delete();
    }

    public function updateVendaFromId($iId) {
        $oVenda = self::find($iId);
        if(is_null($oVenda)) {
            return false;
        }
        $oInput = Input::all();
        $oVenda->fill($oVenda);
        $oVenda->save();
        return $oVenda;
    }

    public function saveVenda() {
        $oInput = Input::all();
        $oVenda = new Venda($oInput);
        $oVenda->save();
        return $oVenda;
    }
}