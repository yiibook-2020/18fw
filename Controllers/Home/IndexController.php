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



    public function ip() {
        //strcasecmp 比较两个字符，不区分大小写。返回0，>0，<0。
        if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'), 'unknown')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } else if (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'), 'unknown')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } else if (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'), 'unknown')) {
            $ip = getenv('REMOTE_ADDR');
        } else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], 'unknown')) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $res =  preg_match ( '/[\d\.]{7,15}/', $ip, $matches ) ? $matches [0] : '';
        echo $res;
        //dump(phpinfo());//所有PHP配置信息
    }
}