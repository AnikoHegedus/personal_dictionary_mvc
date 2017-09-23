<?php
  require_once('models/word.php');
  class HomeController{
    public function index() {
      $words = Word::all();
      //$word = Word::find($_GET['id']);
      $difficultWords = Word::findByDifficulty('difficult');
      $moderateWords = Word::findByDifficulty('moderate');
      $easyWords = Word::findByDifficulty('easy');

      if (isset($_POST["answInEn"])) {
        $rand = array_rand($easyWords, 1);
        $answInEn =  $_POST["answInEn"];
        if($answInEn){
          $wordToPrint = $easyWords[$rand]->lg2;
          echo $answInEn;
          echo $wordToPrint;
          return $wordToPrint;
        }else{
          $wordToPrint = $easyWords[$rand]->lg1;
          echo $answInEn;
          echo $wordToPrint;
          return $wordToPrint;
        }
        
      }


      require_once('views/home/index.php');
    }

    public function show() {
      if (isset($_POST["answInEn"])) {
        echo $_POST["answInEn"];
      }
    }

    /* public function lg() {
     
      require_once('views/home/index.php');
    } */
  }