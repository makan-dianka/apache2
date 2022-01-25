<?php
    require ("./logging/log.php");
    
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

            $visit = "Table USER visited";
            logger($visit);

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

            $visit = "Table ACTIVITE visited";
            logger($visit);
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

            $visit = "Table NOTE visted";
            logger($visit);
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

            $visit = "La table SEANCE visited";
            logger($visit);
        }

}