<?php

namespace models;

class Viagem extends Model  
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
   private $usuarioviagem; // Objeto de Usuario
   private $data;
   private $hora;
   private $pagamento;
   
   

   
public function insert()
    {
       $stmt = $this->prepare("INSERT INTO $this->table (DESTINO, PRECO, TRANSPORTE, DIARIA, NIVEL_HOTEL, TRANSLADO, DESCRICAO_VIAGEM, USUARIO_VIAGEM,TP_VIAGEM, DATAVIAGEM, HORA, PAGAMENTO) 
           VALUES (:DESTINO, :PRECO, :TRANSPORTE, :DIARIA, :NIVELHOTEL, :TRANSLADO, :DESCRICAO, :USUARIOVIAGEM,
           :TIPO ,:DATAVIAGEM, :HORAVIAGEM, :TIPOPAGAMENTO)");
      
       $stmt->bindParam(":DESTINO", $this->destino);
       $stmt->bindParam(":PRECO", $this->preco);
       $stmt->bindParam(":TRANSPORTE", $this->transporte);
       $stmt->bindParam(":DIARIA", $this->diarias);
       $stmt->bindParam(":NIVELHOTEL", $this->nivelhotel);
       $stmt->bindParam(":TRANSLADO", $this->translado);
       $stmt->bindParam(":DESCRICAO", $this->descricao);
       $stmt->bindParam(":USUARIOVIAGEM", $this->usuarioviagem);
       $stmt->bindParam(":TIPO", $this->tipo);
       $stmt->bindParam(":DATAVIAGEM", $this->data);
       $stmt->bindParam(":HORAVIAGEM", $this->hora);
       $stmt->bindParam(":TIPOPAGAMENTO", $this->pagamento);
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

   public function update()
    {
        $stmt = $this->prepare("UPDATE $this->table SET DESTINO = :DESTINO, PRECO = :PRECO, 
        TRANSPORTE = :TRANSPORTE, DIARIA = :DIARIA, NIVEL_HOTEL = :NIVELHOTEL, TRANSLADO = :TRANSLADO,
        DESCRICAO_VIAGEM = :DESCRICAO , USUARIO_VIAGEM = :USUARIOVIAGEM, TP_VIAGEM = :TPVIAGEM, 
        DATA = :DATAVIAGEM, HORA = :HORAVIAGEM, PAGAMENTO = :TIPOPAGAMENTO WHERE id = :ID");
        
        $stmt->bindParam(":ID", $this->id);
        $stmt->bindParam(":DESTINO", $this->destino);
        $stmt->bindParam(":PRECO", $this->preco);
        $stmt->bindParam(":TRANSPORTE", $this->transporte);
        $stmt->bindParam(":DIARIA", $this->diarias);
        $stmt->bindParam(":NIVELHOTEL", $this->nivelhotel);
        $stmt->bindParam(":TRANSLADO", $this->translado);
        $stmt->bindParam(":DESCRICAO", $this->descricao);
        $stmt->bindParam(":USUARIOVIAGEM", $this->usuarioid);
        $stmt->bindParam(":TPVIAGEM", $this->tipo);
        $stmt->bindParam(":DATAVIAGEM", $this->usuarioviagem);
        $stmt->bindParam(":HORAVIAGEM", $this->data);
        $stmt->bindParam(":TIPOPAGAMENTO", $this->pagamento);


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
    public function getUsuarioviagem()
    {
        return $this->usuarioviagem;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setUsuarioviagem($usuarioviagem)
    {
        $this->usuarioviagem = $usuarioviagem;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setData($data)
    {
        $this->data = $data;
    }


        /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }


        /**
     * @return mixed
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * @param mixed $usuarioid
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;
    }


}

