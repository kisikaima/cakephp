<?php
namespace App\Controller;

use App\Controller\AppController;

class CafesController extends AppController
{
    public function index(){
        $this->layout = "";
    }
    public function pre(){
        $this->layout = "";
        if (isset($this->request->data['login'])) {

            $user = $this->Auth->identify();  //←①

            if ($user) {
                $this->Auth->setUser($user);  //←②
                return $this->redirect($this->Auth->redirectUrl());  //←③
            } else {
                //エラー時の処理
            }
        } 
    }
}