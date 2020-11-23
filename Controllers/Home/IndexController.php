<?php
namespace Controllers\Home;

use Libs\Controller;

class IndexController extends Controller {

    public function index() {
        return $this->response('index/index', ['title' => 'PHP框架入门 - 18FW', 'message' => 'Welcome to 18FW PHP Framework!!']);
    }

    public function jsonTest() {
        return $this->responseJson(200, 'hello world', ['title' => 'haha']);
    }
}