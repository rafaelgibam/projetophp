<?php

namespace models;

class Usuario extends Model
{
    /*
     *
    ATRIBUTOS: id, login, senha, Nome completo, Endereço, telefone, e-mail, RG, CPF, Data de Nascimento, nivel_user.

    Observações:
    0 - Atributos encapsulados, getters e setters.
    1 - O Atributo endereço é um objeto da classe Endereco - Agregração.
    2 - nivel_user será uma constante ADMINISTRADOR = 1, USER = 2

    */

    protected $table = "usuario";
    private $id;
    private $login;
    private $senha;
    private $nome;
    private $tel;
    private $rg;
    private $cpf;
    private $datanasc;
    private $tipousuario;
    private $logradouro;
    private $numerocasa;
    private $cidade;
    private $uf;

    public function insert()
    {
        //ID LOGIN SENHA NM_USUARIO CPF RG DT_NASCIMENTO NIVEL_USER LOGRADOURO NR_CASA CIDADE UF TELEFONE
       $stmt = $this->prepare("INSERT INTO $this->table (LOGIN, SENHA, NM_USUARIO, CPF, RG, DT_NASCIMENTO, NIVEL_USER, LOGRADOURO, NR_CASA, CIDADE, UF, TELEFONE) 
                                                      VALUES (:LOGIN, :SENHA, :NOME,:CPF, :RG, :DATANASC, :TIPOUSUARIO, :LOGRADOURO, :NUMEROCASA, :CIDADE, :UF, :TEL)");
       $stmt->bindParam(":LOGIN", $this->login);
       $stmt->bindParam(":SENHA", $this->senha);
       $stmt->bindParam(":NOME", $this->nome);
       $stmt->bindParam(":TEL", $this->tel);
       $stmt->bindParam(":RG", $this->rg);
       $stmt->bindParam(":CPF", $this->cpf);
       $stmt->bindParam(":DATANASC", $this->datanasc);
       $stmt->bindParam(":TIPOUSUARIO", $this->tipousuario);
       $stmt->bindParam(":LOGRADOURO", $this->logradouro);
       $stmt->bindParam(":NUMEROCASA", $this->numerocasa);
       $stmt->bindParam(":CIDADE", $this->cidade);
       $stmt->bindParam(":UF", $this->uf);
       $stmt->execute();
       $stmt->closeCursor();
    }

    public function delete($id)
    {
        $stmt = $this->prepare("DELETE FROM $this->table WHERE id = :ID");
        $stmt->bindParam(":ID", $this->id);
        $stmt->fetch();
        $stmt->closeCursor();
    }

    public function update()
    {
        //LOGIN, SENHA, NM_USUARIO, CPF, RG, DT_NASCIMENTO, NIVEL_USER, LOGRADOURO, NR_CASA, CIDADE, UF, TELEFONE

        $stmt = $this->prepare("UPDATE $this->table SET LOGIN = :LOGIN, SENHA = :SENHA, NM_USUARIO = :NOME, TELEFONE = :TEL,
                                    RG = :RG, CPF = :CPF, DT_NASCIMENTO = :DATANASC, NIVEL_USER = :TIPOUSUARIO, LOGRADOURO = :LOGRADOURO,
                                    NR_CASA = :NUMEROCASA, CIDADE = :CIDADE, UF = :UF 
                                    WHERE id = :ID");

        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":LOGIN", $this->login);
        $stmt->bindParam(":SENHA", $this->senha);
        $stmt->bindParam(":NOME", $this->nome);
        $stmt->bindParam(":TEL", $this->tel);
        $stmt->bindParam(":RG", $this->rg);
        $stmt->bindParam(":CPF", $this->cpf);
        $stmt->bindParam(":DATANASC", $this->datanasc);
        $stmt->bindParam(":TIPOUSUARIO", $this->tipousuario);
        $stmt->bindParam(":LOGRADOURO", $this->logradouro);
        $stmt->bindParam(":NUMEROCASA", $this->numerocasa);
        $stmt->bindParam(":CIDADE", $this->cidade);
        $stmt->bindParam(":UF", $this->uf);
        $stmt->execute();
        $stmt->closeCursor();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getDatanasc()
    {
        return $this->datanasc;
    }

    /**
     * @param mixed $datanasc
     */
    public function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
    }

    /**
     * @return mixed
     */
    public function getTipousuario()
    {
        return $this->tipousuario;
    }

    /**
     * @param mixed $tipousuario
     */
    public function setTipousuario($tipousuario)
    {
        $this->tipousuario = $tipousuario;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getNumerocasa()
    {
        return $this->numerocasa;
    }

    /**
     * @param mixed $numerocasa
     */
    public function setNumerocasa($numerocasa)
    {
        $this->numerocasa = $numerocasa;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

}