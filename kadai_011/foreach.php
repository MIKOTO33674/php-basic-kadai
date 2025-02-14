<?php
// キーと値を持つ連想配列を作成し、変数に代入します
$food_name = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

// foreach文とecho文を使いキーと値を出力します
foreach ($food_name as $key => $value) {
  echo "{$key} : {$value}<br>";
}
?>
