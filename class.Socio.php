<?php

/**
 * Criado por: Krissia Menezes
 * Data: 01/06/2017
 * Hora: 13:41
 */
class Socio extends Pessoa{
    private $idPlano;
    private $ativo;

    
    function Socio($nome, $dataNascimento, $estadoCivil, $sexo, $cpf, $rg, $email, $telefone, $celular, $profissao, $religiao, $cep, $endereco, $numeroEndereco, $bairro, $cidade, $uf, $dataCadastro, $idPlano){
        parent::Pessoa($nome, $dataNascimento, $estadoCivil, $sexo, $cpf, $rg, $email, $telefone, $celular, $profissao, $religiao, $cep, $endereco, $numeroEndereco, $bairro, $cidade, $uf, $dataCadastro);

        $this->setNome($nome);
        $this->setDataNascimento($dataNascimento);
        $this->setEstadoCivil($estadoCivil);
        $this->setSexo($sexo);
        $this->setCpf($cpf);
        $this->setRg($rg);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setCelular($celular);
        $this->setProfissao($profissao);
        $this->setReligiao($religiao);
        $this->setCep($cep);
        $this->setEndereco($endereco);
        $this->setNumeroEndereco($numeroEndereco);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setUf($uf);
        $this->setDataCadastro($dataCadastro);
        $this->setIdPlano($idPlano);
        $this->setAtivo(true);
        $this->setDataCadastro(date('d-m-Y H:i:s'));
    }


//-------------------Métodos especiais------------->
    public function getAtivo(){
        return $this->ativo;
    }


    public function setAtivo($ativo){
        $this->ativo = $ativo;
    }


    public function getIdPlano(){
        return $this->idPlano;
    }


    public function setIdPlano($idPlano){
        $this->idPlano = $idPlano;
    }



}