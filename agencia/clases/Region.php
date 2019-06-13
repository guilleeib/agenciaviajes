<?php

    class Region
    {
        private $regID;
        private $regNombre;

        ### CRUD REGIONES
        /**
         * +listarRegiones()
         * +verRegionPorID()
         * +agregarRegion()
         * +modificarRegion()
         * +eliminarRegion()
         * */


        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $listRegiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $listRegiones;
        }

        /**
         *
         */
        ############### CREATE ###############
        public function agregarRegion()

       {
           $regNombre = $_POST['regNombre'];
           $link = Conexion::conectar();
           $sql= "INSERT INTO regiones
           VALUES (NULL, '".$regNombre."')";
           $stmt = $link->prepare($sql);
           $stmt->execute();
       }
        ############### READ ###############
        public function verRegionPorID()
        {
            $regID= $_GET['regID'];
            $link= Conexion::conectar();
            $sql=" SELECT regID, regNombre
                    FROM regiones
                    WHERE regID=".$regID;
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $verID = $stmt->fetch(PDO::FETCH_ASSOC);
            return $verID;
        }

        ############### UPDATE ###############
       public function modificarRegion()
       {
           $regID = $_POST['regID'];
           $regNombre = $_POST['regNombre'];
           $link = Conexion::conectar();
           $sql= "UPDATE regiones
                    SET regNombre='".$regNombre."'
               WHERE regID= ".$regID;
           $stmt = $link->prepare($sql);
           $stmt -> execute();
       }

        ############### DELETE ###############

        public function eliminarRegion()
        {
            $regID= $_POST['regID'];
            $link = Conexion::conectar();
            $sql= "DELETE from regiones
                    WHERE regID = ".$regID;
            $stmt = $link->prepare($sql);
            $stmt -> execute();
        }

        public function getRegID()
        {
            return $this->regID;
        }

        public function setRegID($regID)
        {
            $this->regID = $regID;
        }

        public function getRegNombre()
        {
            return $this->regNombre;
        }
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
        }

    }