<?php

require_once('models/word.php');

  class WordController {
    
    public function show_dictionary() {
      
      $words = Word::all();
      //$word = Word::find($_GET['id']);
      $difficultWords = Word::findByDifficulty('difficult');
      $moderateWords = Word::findByDifficulty('moderate');
      $easyWords = Word::findByDifficulty('easy');

      require_once('views/word/show_dictionary.php');
    }

    public function add_word() {
      
      Word::addNewWord();

      require_once('views/word/add_word.php');
    }

  }