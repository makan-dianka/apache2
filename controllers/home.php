<?php
    class home extends Controller {
        public function page() {
            // SHOULD BE A mySQL QUERY ... 
            // $user['table'] = ['username'=>'MAKAN' , 'prenom' => 'DIANKA'];
            // $this->set($user);
            $this->render('home');
        }
}