<?php

class ControllerCategory {
    public function get_C_AllArticle(){
        $Articles= Article::getAllArticle();
        return $Articles;
    }
       
    public function create_C_Article(){
        if (isset($_POST['submit'])){
            $name =$_POST['name'];
        };
        $result = Category::createArticle($name);
        if($result ==1){
            Session::set('Success','Category Ajoute avec success');
            Redirect::to('home');
        }
        else echo $result ;
    }
}

?>