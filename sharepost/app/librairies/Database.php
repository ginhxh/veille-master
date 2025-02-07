<?php
/*

*PDO DB CLASS
*CONNECT TO DB 
*BIND VALUES
*RETURN ROWS AND RESULTS
*CREAT PREPARED STATEMENTS
*/

use function PHPSTORM_META\type;

class Database{
    private $host=DB_HOST;
    private $db_pwd=DB_PWD;
    private $db_name=DB_NAME;
    private $db_user=DB_USER;

private $dbh;
private $stmt;
private $error;


public function __construct(){

$dsn='mysql:host='.$this->host.';dbname='.$this->db_name;

$optin=array(
PDO::ATTR_PERSISTENT=>true,
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
);
try{
    $this->dbh=new PDO($dsn,$this->db_user,$this->db_pwd,$optin);

}
catch(PDOException $e){
    $this->error=$e->getMessage();
    echo $this->error;
}

}

///prepare stmt
public function query($sql){

$this->stmt=$this->dbh->prepare($sql);


}
//bind values

public function bind($parm,$value,$type=null){
if(is_null($value)){
switch(true){
case is_int($value):
    $type=PDO::PARAM_INT;
break;
case is_bool($value):
    $type=PDO::PARAM_BOOL;
break;
case is_null($value):
    $type=PDO::PARAM_NULL;
break;


default:
$type=PDO::PARAM_STR;
}

}
$this->stmt->bindValue($parm,$value,$type);
  
}
///execute

public function execute(){
return $this->stmt->execute();
}
//fetch results as object
public function resultSet(){
$this->execute();
return $this->stmt->fetchAll(PDO::FETCH_OBJ);

}

//fetch result
public function single(){
    $this->execute();
    return $this->stmt->fetch();
    
    }
//fetch row count

    public function rowCount(){
        return $this->stmt->rowCount();
        
}
}