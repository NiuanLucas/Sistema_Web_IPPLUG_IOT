<?php

namespace App\Model;

/**
 * Description of Sensor
 *
 * @author Matheus
 */
class Sensor {
    private $id;
    private $temperatura, $data_registro, $horario, $data, $umidade, $fogo, $presenca, $gas, $potencia;
    private $distancia, $tomada1, $tomada2, $tomada3, $tomada4, $tensao, $corrente;
    
    public function getHorario() {
        return $this->horario;
    }

    public function getData() {
        return $this->data;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function setData($data) {
        $this->data = $data;
    }

        
    public function getId() {
        return $this->id;
    }

    public function getTemperatura() {
        return $this->temperatura;
    }

    public function getData_registro() {
        return $this->data_registro;
    }

    public function getUmidade() {
        return $this->umidade;
    }

    public function getFogo() {
        return $this->fogo;
    }

    public function getPresenca() {
        return $this->presenca;
    }

    public function getGas() {
        return $this->gas;
    }

    public function getPotencia() {
        return $this->potencia;
    }

    public function getDistancia() {
        return $this->distancia;
    }

    public function getTomada1() {
        return $this->tomada1;
    }

    public function getTomada2() {
        return $this->tomada2;
    }

    public function getTomada3() {
        return $this->tomada3;
    }

    public function getTomada4() {
        return $this->tomada4;
    }

    public function getTensao() {
        return $this->tensao;
    }

    public function getCorrente() {
        return $this->corrente;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTemperatura($temperatura) {
        $this->temperatura = $temperatura;
    }

    public function setData_registro($data_registro) {
        $this->data_registro = $data_registro;
    }

    public function setUmidade($umidade) {
        $this->umidade = $umidade;
    }

    public function setFogo($fogo) {
        $this->fogo = $fogo;
    }

    public function setPresenca($presenca) {
        $this->presenca = $presenca;
    }

    public function setGas($gas) {
        $this->gas = $gas;
    }

    public function setPotencia($potencia) {
        $this->potencia = $potencia;
    }

    public function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    public function setTomada1($tomada1) {
        $this->tomada1 = $tomada1;
    }

    public function setTomada2($tomada2) {
        $this->tomada2 = $tomada2;
    }

    public function setTomada3($tomada3) {
        $this->tomada3 = $tomada3;
    }

    public function setTomada4($tomada4) {
        $this->tomada4 = $tomada4;
    }

    public function setTensao($tensao) {
        $this->tensao = $tensao;
    }

    public function setCorrente($corrente) {
        $this->corrente = $corrente;
    }
}