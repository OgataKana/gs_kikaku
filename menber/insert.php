<?php
//1. POSTデータ取得
$_id = $_POST["id"];
$_m_name = $_POST["m_name"];
$_f_name = $_POST["f_name"];
$_m_tel = $_POST["m_tel"];
$_m_mail = $_POST["m_mail"];
$_m_addnum = $_POST["m_addnum"];
$_m_add = $_POST["m_add"];
$_m_type = $_POST["m_type"];
$_m_genre = $_POST["m_genre"];
$_m_pass = $_POST["m_pass"];



//2. DB接続します
include "funcs.php";
$pdo = db_con();

//３．データ登録SQL作成
$sql = "INSERT INTO gs_kikaku(m_name,f_name,m_tel,m_mail,m_addnum,m_add,m_type,m_genre,m_pass)VALUES(:m_name,:f_name,:m_tel,:m_mail,:m_addnum,:m_add,:m_type,:m_genre,:m_pass)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':m_name', $co_name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':f_name', $a_name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_tel', $co_tel, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_mail', $co_mail, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_addnum', $co_addnum, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_add', $co_add, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_type', $co_type, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_genre', $co_genre, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':m_pass', $co_pass, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();//実行

//４．データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    redirect("index.php");
}
