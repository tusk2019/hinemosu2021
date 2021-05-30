<?php
    header('Content-type: text/plain; charset= UTF-8');
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        // タイムゾーン設定
        date_default_timezone_set('Asia/Tokyo');

        // 変数の初期化
        $now_date = null;

        try {
            // DBへ接続
            $dbh = new PDO("pgsql:host=127.0.0.1; dbname=booktown;", 'booktown', 'kouki0328');
            // 書き込み日時を取得
            $now_date = date("Y-m-d H:i:s");
            $sql = "INSERT INTO hinemosu_contact (time, name, email, message) VALUES ('$now_date', '$name', '$email', '$message')";
            $data = $dbh->query($sql);
            require('finish.php');
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }

        echo '送信が完了いたしました。';
    } else {
        echo 'FAIL TO AJAX REQUEST';
    }
