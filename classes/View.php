<?php
/**
 * Created by PhpStorm.
 * User: ilyab
 * Date: 29.12.2019
 * Time: 0:05
 */

class View
{
    public $data = [];

    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function render($template)
    {
        ob_start();
        include_once __DIR__ . '/../templates/' . $template;
        $out = ob_get_contents();
        ob_end_clean();
        return $out;
    }
    public function display($template)
    {
        echo $this->render($template);
    }
}