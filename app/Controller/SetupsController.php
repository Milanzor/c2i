<?php

App::uses('AppController', 'Controller');

/**
 * Class SetupsController
 */
class SetupsController extends AppController {

    public function index() {

        if ( ! Configure::read('debug')) {
            throw new NotFoundException();
        }

        App::uses('Debugger', 'Utility');

        $this->set('pagetitle', 'Welcome to c2i!');

        $this->Toast->add('Welcome to c2i!', ['no-timeout']);
    }

}
