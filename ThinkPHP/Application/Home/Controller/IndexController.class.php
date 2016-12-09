<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        for($i = 0;$i <= 10; $i++){
            echo $i . '<br />';
        }
        $this->display();
    }
}