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
require_once './model/order.php';


// 未ログインの場合はログインページへ遷移
if(check_login() !== TRUE) {
	header("Location: ./login.php");
	exit();
}

// 初期設定
$err_msg = [];
$new_img = '';
$new_img_filename = '';
$img_dir    = './img/';
// DB接続
$dbh = get_db_connect();


// POST時の処理
if(get_request_method() === "POST") {

    $id = insert_item($dbh, get_post_data('name'), get_post_data('price'), get_post_data('stock'), get_post_data('department'));

          // HTTP POST でファイルがアップロードされたかどうかチェック
          if (is_uploaded_file($_FILES['new_img']['tmp_name']) === TRUE) {
            // 画像の拡張子を取得
            $extension = pathinfo($_FILES['new_img']['name'], PATHINFO_EXTENSION);
            // 指定の拡張子であるかどうかチェック
            if ($extension === 'jpg' || $extension === 'jpeg') {
              // 保存する新しいファイル名の生成（ユニークな値を設定する）
              $new_img_filename = 'p'. $id . '.' . $extension;
              // 同名ファイルが存在するかどうかチェック
              if (is_file($img_dir . $new_img_filename) !== TRUE) {
                // アップロードされたファイルを指定ディレクトリに移動して保存
                if (move_uploaded_file($_FILES['new_img']['tmp_name'], $img_dir . $new_img_filename) !== TRUE) {
                    $err_msg[] = 'ファイルアップロードに失敗しました';
                }
              } else {
                $err_msg[] = 'ファイルアップロードに失敗しました。再度お試しください。';
              }
            } else {
              $err_msg[] = 'ファイル形式が異なります。画像ファイルはJPEG又はPNGのみ利用可能です。';
            }
          } else {
            $err_msg[] = 'ファイルを選択してください';
          }

    header("Location: ./exhibit_done.php");
    exit();
}

// テンプレートファイル読み込み
include_once './view/exhibit.php';
