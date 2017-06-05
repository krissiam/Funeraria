<?php 


class Pessoa{

  function Pessoa($nome, $dataNascimento, $estadoCivil, $sexo, $cpf, $rg, $email, $telefone, $celular, $profissao, $religiao, $cep, $endereco, $numeroEndereco, $bairro, $cidade, $uf, $dataCadastro){
       $this->nome              = $nome;
       $this->dataNascimento    = $dataNascimento;
       $this->estadoCivil       = $estadoCivil;
       $this->sexo              = $sexo;
       $this->cpf               = $cpf;
       $this->rg                = $rg;
       $this->email             = $email;
       $this->telefone          = $telefone;
       $this->celular           = $celular;
       $this->profissao         = $profissao;
       $this->religiao          = $religiao;
       $this->cep               = $cep;
       $this->endereco          = $endereco;
       $this->numeroEndereco    = $numeroEndereco;
       $this->bairro            = $bairro;
       $this->cidade            = $cidade;
       $this->uf                = $uf;
       $this->dataCadastro      = $dataCadastro;
  }

  function setAll($nome = false, $dataNascimento = false, $estadoCivil = false, $sexo = false, $cpf = false, $rg = false, $email = false, $telefone = false, $celular = false, $profissao = false, $religiao = false, $cep = false, $endereco = false, $numeroEndereco = false, $bairro = false, $cidade = false, $uf = false, $dataCadastro = false){
      if($nome !== false)
        $this->setNome($nome);
      if($dataNascimento !== false)
        $this->setDataNascimento($dataNascimento);
      if($estadoCivil !== false)
        $this->setEstadoCivil($estadoCivil);
      if($sexo !== false)
         $this->setSexo($sexo);
      if($cpf !== false)
          $this->setCpf($cpf);
      if($rg !== false)
          $this->setRg($rg);
      if($email !== false)
          $this->setEmail($email);
      if($telefone !== false)
          $this->setTelefone($telefone);
      if($celular !== false)
          $this->setCelular($celular);
      if($profissao !== false)
          $this->setProfissao($profissao);
      if($religiao !== false)
          $this->setReligiao($religiao);
      if($endereco !== false)
          $this->setEndereco($endereco);
      if($numeroEndereco !== false)
          $this->setNumeroEndereco($numeroEndereco);
      if($bairro !== false)
          $this->setBairro($bairro);
      if($cidade !== false)
          $this->setCidade($cidade);
      if($uf !== false)
          $this->setUf($uf);
      if($dataCadastro !== false)
          $this->setDataCadastro($dataCadastro);
  }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function setCelular($celular){
        $this->celular = $celular;
    }


    public function getCep(){
        return $this->cep;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getDataCadastro(){
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro){
        $this->dataCadastro = $dataCadastro;
    }

    public function getDataNascimento(){
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function getEmail(){
        return $this->email;
    }


    public function setEmail($email){
        $this->email = $email;
    }


    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEstadoCivil(){
        return $this->estadoCivil;
    }

    public function setEstadoCivil($estadoCivil){
        $this->estadoCivil = $estadoCivil;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNumeroEndereco(){
        return $this->numeroEndereco;
    }

    public function setNumeroEndereco($numeroEndereco){
        $this->numeroEndereco = $numeroEndereco;
    }

    public function getProfissao(){
        return $this->profissao;
    }

    public function setProfissao($profissao){
        $this->profissao = $profissao;
    }

    public function getReligiao(){
        return $this->religiao;
    }

    public function setReligiao($religiao){
        $this->religiao = $religiao;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getUf(){
        return $this->uf;
    }

    public function setUf($uf){
        $this->uf = $uf;
    }

}
?>