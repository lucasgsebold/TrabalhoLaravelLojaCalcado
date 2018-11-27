<?php
namespace App\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

/**
 * @package Model
 * @author  Lucas Gustavo Sebold
 * @since   16/11/2018
 */
class Venda extends Model {
    protected $table      = 'venda';
    protected $fillable   = array('vendacodigo', 'vendadata', 'vendaformapag', 'clicodigo', 'vencodigo', 'calcodigo');
    protected $primaryKey = 'vendacodigo';
    public    $timestamps = false;

    public function getAllVendas() {
        return DB::select('SELECT * FROM venda 
        JOIN cliente ON cliente.clicodigo = venda.clicodigo 
        JOIN vendedor ON vendedor.vencodigo = venda.vencodigo
        JOIN calcado ON calcado.calcodigo = venda.calcodigo');
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
        $oVenda->fill($oInput);
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