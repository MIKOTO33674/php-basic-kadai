<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
     function sort_2way($array, $order) {
      if ($order) {
        sort($array);
      } else {
        rsort($array);
      }
      foreach ($array as $value) {
        echo $value . '<br>';
      }
        
      
    }

    $num = [15, 4, 18, 23, 10];

    // 昇順の結果を受け取って表示
    $sorted_asc = sort_2way($num, TRUE);
    echo "昇順にソートされました：<br>";
    foreach ($sorted_asc as $value) {
      echo $value . '<br>';
    }

    // 降順の結果を受け取って表示
    $sorted_desc = sort_2way($num, FALSE);
    echo "降順にソートされました：<br>";
    foreach ($sorted_desc as $value) {
      echo $value . '<br>';
    }
    ?>
  </p>
</body>

</html>