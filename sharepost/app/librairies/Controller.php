<?php
// base controller loaed models and views
class Controller{
// load model
public function model($model){
require_once '../app/models/'. $model . '.php';
// instatiate model
return new $model();
    }
//load view
public function view($view,$data=[]){
//check for view fille
if(file_exists('../app/views/'.$view.'.php')){
require_once '../app/views/'.$view.'.php';
}
else{
    die('view does not exicte');
}
    }
}