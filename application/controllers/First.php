<?php

/**
 * Our page displaying our first, zzz, and gimme quotes with the autoloaded Quotes model.
 * 
 * controllers/First.php ?
 *
 * ------------------------------------------------------------------------
 */

class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'homepage';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $authors = array();
        
        $authors[] = array('who' => $source['who'], 'what' => $source['what'], 'mug' => $source['mug'], 'href' => $source['where']);
        
        $this->data['authors'] = $authors;

        $this->render();
    }
    
    function zzz(){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get("1");
        $authors = array();
        
        $authors[] = array('who' => $source['who'], 'what' => $source['what'], 'mug' => $source['mug'], 'href' => $source['where']);
        
        $this->data['authors'] = $authors;
        $this ->data = array_merge($authors[0], $this->data);
        $this->render();
    }
    
    function gimme($id){
        $this->data['pagebody'] = 'justone';    // this is the view we want shown
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($id);
        $authors = array();
        
        $authors[] = array('who' => $source['who'], 'what' => $source['what'], 'mug' => $source['mug'], 'href' => $source['where']);
        
        $this->data['authors'] = $authors;
        $this ->data = array_merge($authors[0], $this->data);
        $this->render();
    }

}

