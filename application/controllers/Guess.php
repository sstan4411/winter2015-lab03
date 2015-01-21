<?php

/**
 * Our page displaying Guess quote with the autoloaded Quotes model.
 * 
 * controllers/Guess.php ?
 *
 * ------------------------------------------------------------------------
 */

class Guess extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get("4");
        $authors = array();
        
        $authors[] = array('who' => $source['who'], 'what' => $source['what'], 'mug' => $source['mug'], 'href' => $source['where']);
        
        $this->data['authors'] = $authors;
        $this ->data = array_merge($authors[0], $this->data);
        $this->render();
    }
    
}

