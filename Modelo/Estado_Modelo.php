<?php

class Estado{

private $id_estado;
private $Estado;


    /**
     * @return mixed
     */
    public function getIdEstado()
    {
        return $this->id_estado;
    }

    /**
     * @param mixed $id_estado
     *
     * @return self
     */
    public function setIdEstado($id_estado)
    {
        $this->id_estado = $id_estado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     *
     * @return self
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;

        return $this;
    }
}









?>