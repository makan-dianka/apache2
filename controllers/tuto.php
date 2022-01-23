<?php
    class tuto extends Controller {
        public function index() {
            // SHOULD BE A mySQL QUERY ... 
            $y['tuto'] = ['nom'=>'POTTER' , 'prenom' => 'HARRY'];
            $this->set($y);
            $this->render('view');
        }

        public function beweb() {
            // SHOULD BE A mySQL QUERY ... 
            $user['table'] = ['username'=>'RAMESH' , 'prenom' => 'MAHMOUDI'];
            $this->set($user);
            $this->render('beweb');
        }
}