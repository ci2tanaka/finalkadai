<?php
/**
* ec_item商品テーブルモデル
* /

* 商品の一覧を取得
*/
function get_item_list($dbh) {
	// SQL生成
	$sql = 'SELECT * FROM ec_item';
	// クエリ実行
	return get_as_array($dbh, $sql);
}

/**
* 特定の商品情報を取得
*/
function get_item_data($dbh, $id) {
	// SQL生成
	$sql = 'SELECT * FROM ec_item WHERE id = ?';
	$val = [$id];
	// クエリ実行
	return get_as_array($dbh, $sql, $val);
}

/*キーワードから商品情報を取得
*/
function get_item_list_by_keyword($dbh, $keyword) {
// SQL作成
//  $sql = 'SELECT * FROM ec_item WHERE name LIKE ¥'%'. $keyword.'%¥'';
	$sql = "SELECT * FROM ec_item WHERE name LIKE '%". $keyword."%'";

	// クエリ実行
	return get_as_array($dbh, $sql);
}
/*カテゴリー別に商品情報を取得*/
function get_item_list_by_department ($dbh, $department) {
  $sql = 'SELECT * FROM ec_item WHERE department = $department';
	return get_as_array($dbh, $sql);
}
/**
* 新規商品を追加
*/
function insert_item($dbh, $name, $price, $stock, $department) {
	// SQL生成
	$sql = 'INSERT INTO ec_item (name, price, stock, department, create_date) VALUES (?, ?, ?, ?, now())';
	$val = [$name, $price, $stock, $department];

	// クエリ実行
  execute_db($dbh, $sql, $val);
  return $dbh->lastInsertId();
}
/**
* 商品在庫数を変更
*/
function update_item_stock($dbh, $id, $stock) {
	// SQL生成
	$sql = 'UPDATE ec_item SET stock = ? WHERE id = ? LIMIT 1';
	$val = [$stock, $id];
	// クエリ実行
	return execute_db($dbh, $sql, $val);
}

/**
* 商品ステータスを変更
*/
function update_item_status($dbh, $id, $status) {
	// SQL生成
	$sql = 'UPDATE ec_item SET status = ? WHERE id = ? LIMIT 1';
	$val = [$status, $id];
	// クエリ実行
	return execute_db($dbh, $sql, $val);
}
