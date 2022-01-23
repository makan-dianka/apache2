<?php
    
    class table extends Controller {

        public function user() {
            // SHOULD BE A mySQL QUERY ... 
            require ("./db/connexion.php");

            $request_sql = "SELECT * FROM user;";
            $request = $CONN -> prepare($request_sql);
            $request -> execute();

            $data = $request -> fetchAll();

            $context['data'] = $data;
            $this->set($context);
            $this->render('user');

        }


        public function activite() {
            // SHOULD BE A mySQL QUERY ... 
            require ("./db/connexion.php");
            $request_sql = "SELECT * FROM activite";
            $request = $CONN -> prepare($request_sql);
            $request -> execute();
            $data = $request -> fetchAll();

            $context['data'] = $data;
            $this -> set($context);
            $this->render('activite');
        }


        public function note() {
            // SHOULD BE A mySQL QUERY ... 
            require ("./db/connexion.php");
            $request_sql = "SELECT * FROM note";
            $request = $CONN -> prepare($request_sql);
            $request -> execute();
            $data = $request -> fetchAll();

            $context['data'] = $data;
            $this -> set($context);
            $this->render('note');
        }


        public function seance() {
            // SHOULD BE A mySQL QUERY ... 
            require ("./db/connexion.php");
            $request_sql = "SELECT * FROM seance";
            $request = $CONN -> prepare($request_sql);
            $request -> execute();
            $data = $request -> fetchAll();

            $context['data'] = $data;
            $this -> set($context);
            $this->render('note');
        }

}