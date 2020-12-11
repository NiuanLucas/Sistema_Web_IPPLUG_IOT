<?php

namespace App\Model;

class Usuario {
    //put your code here
    private $id;
    private $hora_cadastro;
    private $nome;
    private $email;
    private $senha;
    private $nascimento;
    private $telefone;
    private $sexo;
    private $estado;
    private $foto;
    private $cor;
    private $ip;
    
    private $tomada1;
    private $tomada2;
    private $tomada3;
    private $tomada4;
    
    public function getTomada1(){
    
    	return $this->tomada1;
    
    }
    
    public function getTomada2(){
    
    	return $this->tomada2;
    
    }
    
    public function getTomada3(){
    
    	return $this->tomada3;
    
    }
    
    public function getTomada4(){
    
    	return $this->tomada4;
    
    }
    
    public function setTomada1($tomada1){
    
    	$this->tomada1 = $tomada1;
    
    }
    
    public function setTomada2($tomada2){
    
    	$this->tomada2 = $tomada2;
    
    }
    
    public function setTomada3($tomada3){
    
    	$this->tomada3 = $tomada3;
    
    }    
    
    public function setTomada4($tomada4){
    
    	$this->tomada4 = $tomada4;
    
    }
        
    public function getIp(){
    	return $this->ip;
    }
    
    public function setIp($ip){
    	$this->ip = $ip;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getId() {
        return $this->id;
    }

    public function getHora_cadastro() {
        return $this->hora_cadastro;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getNascimento() {
        return $this->nascimento;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setHora_cadastro($hora_cadastro) {
        $this->hora_cadastro = $hora_cadastro;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }


}
