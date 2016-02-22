<?php
class Article_Model extends Model{


    public $id;
    public $author;
    public $text;
    public $date_create;

    private function fieldsTable(){
        return array(

            'id' => 'id',
            'author' => 'author',
            'text' => 'text',
            'date_create' => 'date_create'
        );
    }


    public function create() {
        $arrayAllFields = array_keys($this->fieldsTable());
        $arraySetFields = array();
        $arrayData = array();
        foreach($arrayAllFields as $field){
            if(!empty($this->$field)){
                $arraySetFields[] = $field;
                $arrayData[] = $this->$field;
            }
        }
        $forQueryFields =  implode(', ', $arraySetFields);
        $rangePlace = array_fill(0, count($arraySetFields), '?');
        $forQueryPlace = implode(', ', $rangePlace);

        try {
            $db = $this->db;
            $stmt = $db->prepare("INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)");
            $result = $stmt->execute($arrayData);
        }catch(PDOException $e){
            echo 'Error : '.$e->getMessage();
            echo '<br/>Error sql : ' . "'INSERT INTO $this->table ($forQueryFields) values ($forQueryPlace)'";
            exit();
        }

        return $result;
    }

    public function getAllRows(){
        if(!isset($this->dataResult) OR empty($this->dataResult)) return false;
        return $this->dataResult;
    }
}