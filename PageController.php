<?php
  namespace Project\Controllers;
  use \Core\Controller;

  class PageController extends Controller{

    public function act(){
      return $this->render('page/act', [
        'header' => 'list users',
        'users' => ['user1', 'user2', 'user3']
      ]);
    }

  }
