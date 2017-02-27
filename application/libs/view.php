<?php

class View
{
    public function render($filename) {
      require VIEWS_PATH . $filename . '.php';
    }
}
