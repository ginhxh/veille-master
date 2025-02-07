<?php 
class  Pages extends Controller{
    public function __construct()
    {
        
    }
public function index(){

        $data=['title'=>'SharePosts',
    
    'discription'=>'Simple social network built on the TraversyMVC  php freamwork'];

$this->view('pages/index',$data);

    }

public function about(){
    $data=['title'=>'about us',
    'discription'=>'Simple app to share postes'];



        $this->view('pages/about',$data);
    }

}