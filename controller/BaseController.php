<?php
abstract class BaseController{

    public function getHead(){
        echo '<html><head></head><body>';
    }

    public function getFooter(){
        echo '</body></html>';
    }

    abstract public function getBody();

    public function showPage(){
        $this->getHead();
        $this->getBody();
        $this->getFooter();
    }

}