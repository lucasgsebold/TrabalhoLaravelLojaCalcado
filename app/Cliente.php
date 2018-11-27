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
class Cliente extends Model {
    protected $table      = 'cliente';
    protected $fillable   = array('clicodigo', 'clinome', 'clicpf', 'cliidade', 'cliemail');
    protected $primaryKey = 'clicodigo';
    public    $timestamps = false;

    public function getAllClientes() {
        return self::all();
    }

    public function getCliente($iId) {
        $oCliente = self::find($iId);
        if(is_null($oCliente)) {
            return false;
        }
        return $oCliente;
    }

    public function deleteClienteFromId($iId) {
        $oCliente = self::find($iId);
        if(is_null($oCliente)) {
            return false;
        }
        return $oCliente->delete();
    }

    public function updateClienteFromId($iId) {
        $oCliente = self::find($iId);
        if(is_null($oCliente)) {
            return false;
        }
        $oInput = Input::all();
        $oCliente->fill($oInput);
        $oCliente->save();
        return $oCliente;
    }

    public function saveCliente() {
        $oInput = Input::all();
        $oCliente = new Cliente($oInput);
        $oCliente->save();
        return $oCliente;
    }
 }