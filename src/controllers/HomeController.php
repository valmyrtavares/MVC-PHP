<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
      $nome = "Bonieky";    
      $post = [
        ["titulo" => "titulo de teste1", 'corpo'=> 'corpo de teste1',"idade"=> 12],
        ["titulo" => "titulo de teste2", 'corpo'=> 'corpo de teste2',"idade"=> 12],
        ["titulo" => "titulo de teste3", 'corpo'=> 'corpo de teste3',"idade"=> 12],
        ["titulo" => "titulo de teste4", 'corpo'=> 'corpo de teste4',"idade"=> 12]
      ];
      $this->render('home',[
        'nome' => $nome,
        'idade'=> 90,
        "post"=>$post
      ]);
    }

    public function fotos(){
      $this->render('fotos');
    }

    public function foto($parametros){
        echo "Acessando a foto  " .$parametros['id'];       
    }



    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

}