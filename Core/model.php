<?php
class model{
    
    public $table;
    
    public function read($fields=null){
        if($fields==null){
            $sql = "SELECT $fields FROM ".$this->table."WHERE id=".$this->id;
            $req = mysql_query($sql) or die(mysql_error());
            $data = mysql_fetch_assoc($req);
            foreach($data as $k=>$v){
                $this->$k = $v;
            }
        }
    }
    static function load($name){
        require('$name.php');
        return new $name();
    }
    
}