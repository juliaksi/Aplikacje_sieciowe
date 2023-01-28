<?php
const _SERVER_NAME = 'localhost:80';
const _SERVER_URL = 'http://' . _SERVER_NAME;
const _APP_ROOT = '/php_02_ochrona_dostepu';
const _APP_URL = _SERVER_URL . _APP_ROOT;
define("_ROOT_PATH", dirname(__FILE__));

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
