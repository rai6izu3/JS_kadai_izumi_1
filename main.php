<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>受付確認</title>
</head>
  <body>
    <?php
      echo "受付完了しました。受付内容は以下となります。";
      echo "お名前：". $_POST["name"];
      echo "郵便番号：". $_POST["yuubin"];
      echo "住所：". $_POST["jyuusyo"];
      echo "電話番号：". $_POST["tel"];
      if (name == s) {
        echo "出欠：出席";
      }
      else if (name == k) {
        echo "出欠：欠席";
      }
      else {
        echo "出欠：保留";
      }
    ?>
  </body>
</html>
