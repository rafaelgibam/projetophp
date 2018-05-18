<?php

namespace models;

class Viagem extends Model implements ICrud 
{

   protected $table = "viagem";

   private $id;
   private $destino;
   private $preco;
   private $transporte;
   private $nivelhotel;
   private $translado;
   private $descricao;
   private $diarias;
   private $tipo;
   private $usuarioid; // Objeto de Usuario

   public function insert()
    {
       $stmt = $this->prepare("INSERT INTO $this->table (DESTINO, PRECO, TRANSPORTE, NIVEL_HOTEL, TRANSLADO, DESCRICAO_VIAGEM, USUARIO_VIAGEM, TP_VIAGEM) VALUES (:DESTINO, :PRECO, :TRANSPORTE, :NIVELHOTEL, :TRANSLADO, :DESCRICAO, :DIARIAS, :USUARIOID, :TPVIAGEM));													 :DESCRICAO_VIAGEM, :DIARIAS, :USUARIO_VIAGEM, :PRECO_TOTAL)");
      
       $stmt->bindParam(":DESTINO", $this->destino);
       $stmt->bindParam(":PRECO", $this->preco);
       $stmt->bindParam(":TRANSPORTE", $this->transporte);
       $stmt->bindParam(":NIVELHOTEL", $this->nivelhotel);
       $stmt->bindParam(":TRANSLADO", $this->translado);
       $stmt->bindParam(":DESCRICAO", $this->descricao);
       $stmt->bindParam(":DIARIAS", $this->diarias);
       $stmt->bindParam(":TPVIAGEM", $this->tipo);
       $stmt->bindParam(":USUARIOID", $this->usuarioid);
       $stmt->execute();
       $stmt->closeCursor();
    }

    public function delete($id)
    {
        $stmt = $this->prepare("DELETE FROM $this->table WHERE id = :ID");
        $stmt->bindParam(":ID", $id);
        $stmt->execute();
        $stmt->closeCursor();
    }

    public function update($id)
    {
        $stmt = $this->prepare("UPDATE $this->table SET DESTINO = :DESTINO, PRECO = :PRECO, TRANSPORTE = :TRANSPORTE, NIVEL_HOTEL = :NIVEL_HOTEL, TRANSLADO = :TRANSLADO,
                                     DESCRICAO_VIAGEM = :DESCRICAO_VIAGEM , DIARIA = :DIARIAS, USUARIO_VIAGEM = :USUARIO_VIAGEM
                                     WHERE id = :ID)");
        $stmt->bindParam(":ID", $id);
        $stmt->bindParam(":DESTINO", $this->login);
        $stmt->bindParam(":PRECO", $this->senha);
        $stmt->bindParam(":TRANSPORTE", $this->nome);
        $stmt->bindParam(":NIVEL_HOTEL", $this->tel);
        $stmt->bindParam(":TRANSLADO", $this->email);
        $stmt->bindParam(":DESCRICAO_VIAGEM", $this->rg);
        $stmt->bindParam(":DIARIAS", $this->cpf);
        $stmt->bindParam(":USUARIO_VIAGEM", $this->datanasc);
        $stmt->bindParam(":PRECO_TOTAL", $this->tipousuario);
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
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param mixed $destino
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
     * @param mixed $preco
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
     * @param mixed $transporte
     */
    public function setTransporte($transporte)
    {
        $this->transporte = $transporte;
    }

    /**
     * @return mixed
     */
    public function getNivelhotel()
    {
        return $this->nivelhotel;
    }

    /**
     * @param mixed $nivelhotel
     */
    public function setNivelhotel($nivelhotel)
    {
        $this->nivelhotel = $nivelhotel;
    }

    /**
     * @return mixed
     */
    public function getTranslado()
    {
        return $this->translado;
    }

    /**
     * @param mixed $translado
     */
    public function setTranslado($translado)
    {
        $this->translado = $translado;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDiarias()
    {
        return $this->diarias;
    }

    /**
     * @param mixed $diarias
     */
    public function setDiarias($diarias)
    {
        $this->diarias = $diarias;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;
    }


}

