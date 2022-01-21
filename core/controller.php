<?php
    class Controller {
        
        var $vars = array();
        public function set($data) {
            $this->vars = array_merge( $this->vars , $data );
        }
        
        public function render($filename){
            extract($this->vars);
            require(ROOT.'views/'.$filename.'.php');
        }
}