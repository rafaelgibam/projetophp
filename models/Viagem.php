<?php

namespace models;

class Viagem extends Model implements Icrud 
{


   protected $table = "viagem";
  
   private $id, $destino, $preco, $transporte, $nivel_hotel, $translado, $descricao_viagem, $diarias, $usuario_viagem, $preco_total;
    


   public function insert()
    {
       $stmt = $this->prepare("INSERT INTO $this->table VALUES (:ID, :DESTINO, :PRECO, :TRANSPORTE, :NIVEL_HOTEL, :TRANSLADO, 															 :DESCRICAO_VIAGEM, :DIARIAS, :USUARIO_VIAGEM, :PRECO_TOTAL)");
      
       $stmt->bindParam(":LOGIN", $this->id);
       $stmt->bindParam(":SENHA", $this->destino);
       $stmt->bindParam(":NOME", $this->preco);
       $stmt->bindParam(":TEL", $this->transporte);
       $stmt->bindParam(":EMAIL", $this->nivel_hotel);
       $stmt->bindParam(":RG", $this->translado);
       $stmt->bindParam(":CPF", $this->descricao_viagem);
       $stmt->bindParam(":DATANASC", $this->diarias);
       $stmt->bindParam(":TIPOUSUARIO", $this->usuario_viagem);
       $stmt->bindParam(":ENDERECO", $this->preco_total);
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
        $stmt = $this->prepare("UPDATE $this->table SET destino = :DESTINO, preco = :PRECO, transporte = :TRANSPORTE, nivel_hotel = :NIVEL_HOTEL, translado = :TRANSLADO,
                                    descricao_viagem = :DESCRICAO_VIAGEM , diarias = :DIARIAS, usuario_viagem = :USUARIO_VIAGEM, preco_total = :PRECO_TOTAL 
                                    	WHERE id = :ID)");
        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":DESTINO", $this->login);
        $stmt->bindParam(":PRECO", $this->senha);
        $stmt->bindParam(":TRANSPORTE", $this->nome);
        $stmt->bindParam(":NIVEL_HOTEL", $this->tel);
        $stmt->bindParam(":TRANSLADO", $this->email);
        $stmt->bindParam(":DESCRICAO_VIAGEM", $this->rg);
        $stmt->bindParam(":DIARIAS", $this->cpf);
        $stmt->bindParam(":USUARIO_VIAGEM", $this->datanasc);
        $stmt->bindParam(":PRECO_TOTAL", $this->tipousuario);
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
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $login
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $senha
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getTransporte()
    {
        return $this->transporte;
    }

    /**
     * @param mixed $criadoem
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;
    }

 /**
     * @return mixed
     */
    public function getNivel_Hotel()
    {
        return $this->nivel_hotel;
    }

    /**
     * @param mixed $id
     */
    public function setNivel_Hotel($nivel_hotel)
    {
        $this->nivel_hotel = $nivel_hotel;
    }

	/**
     * @return mixed
     */
    public function getTranslado()
    {
        return $this->translado;
    }

    /**
     * @param mixed $login
     */
    public function setTranslado($translado)
    {
        $this->translado = $translado;
    }

    /**
     * @return mixed
     */
    public function getDescricao_Viagem()
    {
        return $this->descricao_viagem;
    }

    /**
     * @param mixed $senha
     */
    public function setDescricao_Viagem($descricao_viagem)
    {
        $this->descricao_viagem = $descricao_viagem;
    }

	/**
     * @return mixed
     */
    public function getDiarias()
    {
        return $this->diarias;
    }

    /**
     * @param mixed $criadoem
     */
    public function setDiarias($diarias)
    {
        $this->diarias = $diarias;
    }

	/**
     * @return mixed
     */
    public function getUsuario_Viagem()
    {
        return $this->usuario_viagem;
    }

    /**
     * @param mixed $criadoem
     */
    public function setUsuario_Viagem($usuario_viagem)
    {
        $this->usuario_viagem = $usuario_viagem;
    }

/**
     * @return mixed
     */
    public function getPreco_Total()
    {
        return $this->preco_total;
    }

    /**
     * @param mixed $criadoem
     */
    public function setPreco_Total($preco_total)
    {
        $this->preco_total = $preco_total;
    }


?>

}