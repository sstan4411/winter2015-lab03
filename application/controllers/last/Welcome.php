<?php

/**
 * Our page displaying our Last quote with the autoloaded Quotes model.
 * Named Welcome to make it the default file to execute in the "last" 
 * subfolder.
 * 
 * controllers/last/Welcome.php ?
 *
 * ------------------------------------------------------------------------
 */

class Welcome extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        $authors = array();
        
            $authors[] = array('who' => $source['who'], 'mug' => $source['mug'], 'href' => $source['where']);
        
        $this->data['authors'] = $authors;

        $this->render();
    }

}
