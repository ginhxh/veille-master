
<?php
class Users extends Controller{
public function __construct()
{
    
}

public function register(){

    //check for POST

if($_SERVER['REQUEST_METHOD']==='POST'){
//Procees thre form


}else{
    //init data

    $data=[
'name'=>'',
'email'=>'',
'pwd'=>'',
'pwd_conf'=>'',

'name_error'=>'',
'email_error'=>'',
'pwd_error'=>'',
'pwd_conf_error'=>'',
    ];
//load view

$this->view('users/register',$data);


}
}
}