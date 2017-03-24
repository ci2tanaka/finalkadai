<?php
session_start();
// 設定ファイル読み込み
require_once './conf/const.php';
// 関数ファイル読み込み
require_once './model/function.php';
// model読み込み
require_once './model/login.php';
require_once './model/item.php';
require_once './model/cart.php';

// テンプレートファイル読み込み
include_once './view/exhibit_done.php';
