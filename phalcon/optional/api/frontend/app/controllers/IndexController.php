<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        $ch = curl_init();
        $url = "http://172.31.0.3/api/movies";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $contents = curl_exec($ch);
        echo "<pre>";
        print_r($contents); die;
    }
}
