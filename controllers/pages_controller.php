<?php
  class PagesController {
    public function home() {
      require_once('views/home/index.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }

    public function word() {
      require_once('views/word/show.php');
    }

    public function about() {
      require_once('views/about/show.php');
    }
  }
