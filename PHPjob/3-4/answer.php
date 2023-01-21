<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

$my_name = $_POST['my_name'];

$question1 = $_POST['question1'];
$answer1 = $_POST['answer1'];
  if($question1 == $answer1){
      $rs1 = "正解!";
  }else{
      $rs1 = "残念・・・";
}

$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];
  if($question2 == $answer2){
      $rs2 = "正解!";
  }else{
      $rs2 = "残念・・・";
}

$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];
  if($question3 == $answer3){
      $rs3 = "正解!";
  }else{
      $rs3 = "残念・・・";
}
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>問題内容</title>
        <link rel="stylesheet" href="css/base.css">
    </head>
    <body>
        <p><?php echo $my_name ?>さんの結果は・・・？</p>

        <p>①の答え</p>
        <?php echo $rs1 ?>

        <p>②の答え</p>
        <?php echo $rs2 ?>

        <p>③の答え</p>
        <?php echo $rs3 ?>

    </body>
</html>