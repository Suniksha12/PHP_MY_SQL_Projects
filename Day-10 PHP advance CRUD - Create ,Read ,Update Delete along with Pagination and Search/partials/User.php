<?php

   require_once 'Database.php';
   
   class User extends Database{
        protected $tableName="usertable";

        //function to add users
        public function add($data){
            if(!empty($data)){
                $fields = $placeholder=[];
                foreach($data as $field => $value){
                    $fields[] = $field;
                    $placeholder[] = ":{field}";
                }
            }
           // $sql = "INSERT INTO {$this->tableName} (pname,email,phone) VALUES (:pname,:email,:phone);"
           $sql = "INSERT INTO {$this->tableName} (".implode(",",$fields).") VALUES(".implode(",",$placeholder).")";
           $stmt = $this->conn->prepare($sql);
           try{
              $this->conn->beginTransaction(); 
              $stmt->execute($data);
              $lastInsertedId=$this->conn->lastInsertId();
              $this->conn->commit();
              return $lastInsertedId; 
           } catch(PDOException $e){
                echo "Error:".$e->getMessage();
                $this->conn->rollback();
           }
        }

        //function to get rows

        //function to get single ow

        //function to count number of rows

        //function to uplaod photo

        //function to update

        //function to delete

        //function for search

   }
?>