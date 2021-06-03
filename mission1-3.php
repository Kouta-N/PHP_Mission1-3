<!DOCTYPE html>
<html lang="ja">

<head></head>

<body>
  <?php
$question = ['問題' => '日本の首都は?'];
$answer = ['回答1' => '大阪','回答2' => '北海道','回答3' => '箱根','回答4' => '東京'];
echo key($question).' '.$question[key($question)];
foreach($answer as $key => $value){
  echo '<br>'.$key.' '.$value;
}
?>
</body>

</html>