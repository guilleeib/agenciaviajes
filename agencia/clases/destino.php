<?php

    class destino
    {
        private $destID;
        private $destNombre;
        private $regID;
        private $destPrecio;
        private $destAsientos;
        private $destDisponibles;


        public function listarDestinos()
        {
            $link = Conexion::conectar();
            $sql= "SELECT destID,destNombre, regID, destPrecio, destAsientos , destDisponibles, destActivo 
                        FROM destinos";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $listaDestinos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $listaDestinos;
        }

        ########## CREATE ##########

        public function agregarDestino()
        {
            $destNombre= $_POST['destNombre'];
            $regID= $_POST['regID'];
            $destPrecio= $_POST['destPrecio'];
            $destAsientos= $_POST['destAsientos'];
            $destDisponibles= $_POST['destDisponibles'];
            $destActivos= $_POST['destActivos'];
            $link = Conexion::conectar();
            $sql = "INSERT INTO destinos
                    VALUES (NULL, '".$destNombre."', '$regID', '$destPrecio', '$destAsientos','$destDisponibles','$destActivos')";
            $stmt = $link->prepare($sql);
            $stmt->execute();
        }

        ########## READ ##########

        public function verDestinoPorID()
        {
            $destID= $_GET['destID'];
            $link= Conexion::conectar();
            $sql= "SELECT destID, destNombre,destPrecio, regID, destAsientos, destDisponibles, destActivo
                    FROM destinos
                    WHERE destID= ".$destID;
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $verID = $stmt->fetch(PDO::FETCH_ASSOC);
            return $verID;
        }

        ########## UPDATE ##########

        public function modificarDestino()
        {   $destID= $_POST['destID'];
            $destNombre= $_POST['destNombre'];
            $regID= $_POST['regID'];
            $destPrecio= $_POST['destPrecio'];
            $destAsientos= $_POST['destAsientos'];
            $destDisponibles= $_POST['destDisponibles'];
            $destActivo= $_POST['destActivo'];
            $link= Conexion::conectar();
            $sql= "UPDATE destinos 
                   SET destNombre ='".$destNombre."', regID='".$regID."', destPrecio='".$destPrecio."',
                   destAsientos='".$destAsientos."', destDisponibles='".$destDisponibles."', destActivo='".$destActivo."'
                   WHERE destID=".$regID;
            $stmt = $link->prepare($sql);
            $stmt -> execute();
        }
        ############### DELETE ###############

        public function eliminarDestino()
        {
            $destID= $_POST['destID'];
            $link = Conexion::conectar();
            $sql= "DELETE FROM `destinos` WHERE `destinos`.`destID` =".$destID;
            $stmt = $link->prepare($sql);
            $stmt -> execute();
        }
        /**
         * @return mixed
         */
        public function getDestID()
        {
            return $this->destID;
        }

        /**
         * @param mixed $destID
         */
        public function setDestID($destID)
        {
            $this->destID = $destID;
        }

        /**
         * @return mixed
         */
        public function getDestNombre()
        {
            return $this->destNombre;
        }

        /**
         * @param mixed $destNombre
         */
        public function setDestNombre($destNombre)
        {
            $this->destNombre = $destNombre;
        }

        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        /**
         * @return mixed
         */
        public function getDestPrecio()
        {
            return $this->destPrecio;
        }

        /**
         * @param mixed $destPrecio
         */
        public function setDestPrecio($destPrecio)
        {
            $this->destPrecio = $destPrecio;
        }

        /**
         * @return mixed
         */
        public function getDestAsientos()
        {
            return $this->destAsientos;
        }

        /**
         * @param mixed $destAsientos
         */
        public function setDestAsientos($destAsientos)
        {
            $this->destAsientos = $destAsientos;
        }

        /**
         * @return mixed
         */
        public function getDestDisponibles()
        {
            return $this->destDisponibles;
        }

        /**
         * @param mixed $destDisponibles
         */
        public function setDestDisponibles($destDisponibles)
        {
            $this->destDisponibles = $destDisponibles;
        }

        /**
         * @return mixed
         */
        public function getDestActivo()
        {
            return $this->destActivo;
        }

        /**
         * @param mixed $destActivo
         */
        public function setDestActivo($destActivo)
        {
            $this->destActivo = $destActivo;
        }
        private $destActivo;

    }
