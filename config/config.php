<?php

    class Config {
        private $HOST = "localhost";
        private $USERNAME = "root";
        private $PASSWORD = "";
        private $DB_NAME = "products";
        private $COMPANY_TABLE = "company";
        private $SERIES_TABLE = "series";
        private $MODEL_TABLE = "model";
        private $COLOR_TABLE = "color";
        private $RAM_TABLE = "ram";
        private $STORAGE_TABLE = "storage";
        private $PROCESSOR_TABLE = "processor";
        private $PRODUCT_TABLE = "product";
        private $ORDER_TABLE = "orders";
        public $conn;

        public function connect(){
            $this->conn = mysqli_connect($this->HOST, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

            return $this->conn;
        }

        public function insert_company($company){
            $this->connect();

            $query = "INSERT INTO $this->COMPANY_TABLE(company) VALUES('$company');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_company(){
            $this->connect();

            $query = "SELECT * FROM $this->COMPANY_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_company($id){
            $this->connect();

            $query = "DELETE FROM $this->COMPANY_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_company($company,$id){
            $this->connect();

            $query = "UPDATE $this->COMPANY_TABLE SET company='$company' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_series($series,$company_id)
        {
            $this->connect();

            $query = "INSERT INTO $this->SERIES_TABLE(series,company_id) VALUES('$series',$company_id);";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_series()
        {
            $this->connect();

            $query = "SELECT * FROM $this->SERIES_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_series($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->SERIES_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_series($series,$company_id, $id)
        {
            $this->connect();

            $query = "UPDATE $this->SERIES_TABLE SET series='$series' company_id=$company_id WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_color($color){
            $this->connect();

            $query = "INSERT INTO $this->COLOR_TABLE(color) VALUES('$color');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_color(){
            $this->connect();

            $query = "SELECT * FROM $this->COLOR_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_color($id){
            $this->connect();

            $query = "DELETE FROM $this->COLOR_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_color($color,$id){
            $this->connect();

            $query = "UPDATE $this->COLOR_TABLE SET color='$color' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_ram($ram)
        {
            $this->connect();

            $query = "INSERT INTO $this->RAM_TABLE(ram) VALUES('$ram');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_ram()
        {
            $this->connect();

            $query = "SELECT * FROM $this->RAM_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_ram($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->RAM_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_ram($ram, $id)
        {
            $this->connect();

            $query = "UPDATE $this->RAM_TABLE SET ram='$ram' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_storage($storage)
        {
            $this->connect();

            $query = "INSERT INTO $this->STORAGE_TABLE(storage) VALUES('$storage');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_storage()
        {
            $this->connect();

            $query = "SELECT * FROM $this->STORAGE_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_storage($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->STORAGE_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_storage($storage, $id)
        {
            $this->connect();

            $query = "UPDATE $this->STORAGE_TABLE SET storage='$storage' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_processor($processor)
        {
            $this->connect();

            $query = "INSERT INTO $this->PROCESSOR_TABLE(processor) VALUES('$processor');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_processor()
        {
            $this->connect();

            $query = "SELECT * FROM $this->PROCESSOR_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_processor($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->PROCESSOR_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_processor($processor, $id)
        {
            $this->connect();

            $query = "UPDATE $this->PROCESSOR_TABLE SET processor='$processor' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_model($model)
        {
            $this->connect();

            $query = "INSERT INTO $this->MODEL_TABLE(model) VALUES('$model');";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_model()
        {
            $this->connect();

            $query = "SELECT * FROM $this->MODEL_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_model($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->MODEL_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_model($model, $id)
        {
            $this->connect();

            $query = "UPDATE $this->MODEL_TABLE SET model='$model' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_product($company_id,$series_id,$model_id,$color_id,$ram_id,$storage_id,$processor_id,$price,$stock)
        {
            $this->connect();

            $query = "INSERT INTO $this->PRODUCT_TABLE(company_id,series_id,model_id,color_id,ram_id,storage_id,processor_id,price,stock) VALUES('$company_id','$series_id','$model_id','$color_id','$ram_id','$storage_id','$processor_id','$price',$stock);";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_product()
        {
            $this->connect();

            $query = "SELECT * FROM $this->PRODUCT_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_product($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->PRODUCT_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_product($company_id, $series_id, $model_id, $color_id, $ram_id, $storage_id, $processor_id,$price,$stock, $id)
        {
            $this->connect();

            $query = "UPDATE $this->PRODUCT_TABLE SET company_id='$company_id' series_id='$series_id' model_id='$model_id' color_id='$color_id' ram_id='$ram_id' storage_id='$storage_id' processor_id='$processor_id' price='$price' stock=$stock WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function insert_order($product_id)
        {
            $this->connect();

            $query = "INSERT INTO $this->ORDER_TABLE(product_id) VALUES($product_id);";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function fetch_all_order()
        {
            $this->connect();

            $query = "SELECT * FROM $this->ORDER_TABLE;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function delete_order($id)
        {
            $this->connect();

            $query = "DELETE FROM $this->ORDER_TABLE WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }

        public function update_order($product_id, $id)
        {
            $this->connect();

            $query = "UPDATE $this->ORDER_TABLE SET product_id='$product_id' WHERE id=$id;";

            $res = mysqli_query($this->conn, $query);

            return $res;
        }
    }
