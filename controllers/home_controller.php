<?php
  require_once('models/word.php');
  
  class HomeController{
    public function main() {
      require_once('views/home/main.php');
    }

    public function show() {
   
      $wordToPrint = 'this word';
      echo $wordToPrint;
 /* $words = Word::all();
      //$word = Word::find($_GET['id']);
      $difficultWords = Word::findByDifficulty('difficult');
      $moderateWords = Word::findByDifficulty('moderate');
      $easyWords = Word::findByDifficulty('easy');

      if (isset($_POST["answInEn"])) {
        $rand = array_rand($easyWords, 1);
        $answInEn =  $_POST["answInEn"];
        if($answInEn){
          //$wordToPrint = $easyWords[$rand]->lg1;
          echo $wordToPrint;
          //return $wordToPrint;
        }else{
          $wordToPrint = $easyWords[$rand]->lg2;
         // echo $wordToPrint;
          //return $wordToPrint;
        }
        
        }  */
      /*  require_once('views/home/show.php');
        require_once('views/home/main.php');*/
    }

/*    public function show() {
      if (isset($_POST["answInEn"])) {
        echo $_POST["answInEn"];
      }
      require_once('views/home/main.php');
    }*/

    /* public function lg() {
     
      require_once('views/home/home.php');
    } */
  }