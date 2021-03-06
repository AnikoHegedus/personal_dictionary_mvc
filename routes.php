<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
        break;
      case 'home':
        // we need the model to query the database later in the controller
        //require_once('models/word.php');
        $controller = new HomeController();
        break;
      case 'word':
        $controller = new WordController();
        break;
      case 'about':
        $controller = new AboutController();
        break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'home' => ['main', 'show', 'lg'],
                       'word' => ['show_dictionary', 'add_word'],
                       'about' => ['show']
                      );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
