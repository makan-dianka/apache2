<?php
    class tuto extends Controller {
        public function index() {
            // SHOULD BE A mySQL QUERY ... 
            $y['tuto'] = ['nom'=>'POTTER' , 'prenom' => 'HARRY'];
            $this->set($y);
            $this->render('view');
        }
}