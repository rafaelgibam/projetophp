<?php

namespace models;

class Usuario extends Model implements ICrud
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

    private $id, $login, $senha, $nome, $endereco, $tel, $email, $rg, $cpf, $datanasc, $tipousuario;

    public function insert()
    {
       $stmt = $this->prepare("INSERT INTO $this->table VALUES (:LOGIN, :SENHA, :NOME, :TEL, :EMAIL, :RG, :CPF, :DATANASC, :TIPOUSUARIO, :ENDERECO)");
       $stmt->bindParam(":LOGIN", $this->login);
       $stmt->bindParam(":SENHA", $this->senha);
       $stmt->bindParam(":NOME", $this->nome);
       $stmt->bindParam(":TEL", $this->tel);
       $stmt->bindParam(":EMAIL", $this->email);
       $stmt->bindParam(":RG", $this->rg);
       $stmt->bindParam(":CPF", $this->cpf);
       $stmt->bindParam(":DATANASC", $this->datanasc);
       $stmt->bindParam(":TIPOUSUARIO", $this->tipousuario);
       $stmt->bindParam(":ENDERECO", $this->endereco);
       $stmt->fetch();
       $stmt->closeCursor();
    }

    public function delete($id)
    {
        $stmt = $this->prepare("DELETE FROM $this->table WHERE id = :ID");
        $stmt->bindParam(":ID", $this->id);
        $stmt->fetch();
        $stmt->closeCursor();
    }

    public function update($id)
    {
        $stmt = $this->prepare("UPDATE $this->table SET login = :LOGIN, senha = :SENHA, nome = :NOME, tel = :TEL, email = :EMAIL,
                                    rg = :RG, cpf = :CPF, datanasc = :DATANASC, tipousuario = :TIPOUSUARIO, endereco_id = :ENDERECO 
                                    WHERE id = :ID)");
        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":LOGIN", $this->login);
        $stmt->bindParam(":SENHA", $this->senha);
        $stmt->bindParam(":NOME", $this->nome);
        $stmt->bindParam(":TEL", $this->tel);
        $stmt->bindParam(":EMAIL", $this->email);
        $stmt->bindParam(":RG", $this->rg);
        $stmt->bindParam(":CPF", $this->cpf);
        $stmt->bindParam(":DATANASC", $this->datanasc);
        $stmt->bindParam(":TIPOUSUARIO", $this->tipousuario);
        $stmt->bindParam(":ENDERECO", $this->endereco);
        $stmt->fetch();
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
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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


}