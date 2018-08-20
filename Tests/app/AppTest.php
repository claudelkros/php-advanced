<?php
namespace Test\app;


use app\controller\Controller;
use PHPUnit\Framework\TestCase;

class AppTest extends TestCase{
    public function testsanslash(){
        $app = new Controller();
        $_SERVER['REQUEST_URI'] = '/aaaa/';
        $app->run();
        $this->assertContains('Location: /aaaa', headers_list());
    }
}