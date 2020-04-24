<?php

class Estatus{

private $id_Estatus;
private $Estatus;

    /**
     * @return mixed
     */
    public function getIdEstatus()
    {
        return $this->id_Estatus;
    }

    /**
     * @param mixed $id_estatus
     *
     * @return self
     */
    public function setIdEstatus($id_Estatus)
    {
        $this->id_Estatus = $id_Estatus;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstatus()
    {
        return $this->Estatus;
    }

    /**
     * @param mixed $Estatus
     *
     * @return self
     */
    public function setEstatus($Estatus)
    {
        $this->Estatus = $Estatus;

        return $this;
    }
}











?>