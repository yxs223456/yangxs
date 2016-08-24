<?php

class WeixinAction extends Action
{
    private $token = 'yangxiushan';
    protected function _initialize()
    {
        header("Content-Type:text/html; charset=utf-8");
    }

    public function judgeToken()
    {
        if (isset($_GET['echostr'])) {
            $judge = $this->checkSignature();
            if ($judge) {
                echo $_GET['echostr'];
            } else {
                echo 'error1';
            }
        } else {
            echo 'error2';
        }
    }

    private function checkSignature()
    {
        $signature = $_GET['signature'];
        $timestamp = $_GET['timestamp'];
        $nonce = $_GET['nonce'];

        $arr = array($this->token,$timestamp,$nonce);
        sort($arr,SORT_STRING);
        $tmpStr = implode($arr);
        $tmpStr = sha1($tmpStr);
        if ($signature === $tmpStr) {
            return true;
        } else {
            return false;
        }
    }
}