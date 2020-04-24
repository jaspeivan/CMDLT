<?php

class TipodeUsuario{

private $id_tipodeusuario;
private $TipodeUsuario;

    /**
     * @return mixed
     */
    public function getIdTipodeusuario()
    {
        return $this->id_tipodeusuario;
    }

    /**
     * @param mixed $id_tipodeusuario
     *
     * @return self
     */
    public function setIdTipodeusuario($id_tipodeusuario)
    {
        $this->id_tipodeusuario = $id_tipodeusuario;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipodeUsuario()
    {
        return $this->TipodeUsuario;
    }

    /**
     * @param mixed $TipodeUsuario
     *
     * @return self
     */
    public function setTipodeUsuario($TipodeUsuario)
    {
        $this->TipodeUsuario = $TipodeUsuario;

        return $this;
    }
}


?>