<?php

//$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name = "Sho Touno";
if($name == $name){
echo "「私は$nameです」";
}else{
echo "「$nameではありません」";
}


//for文を使って、1から10000までの合計の値を表示してください。

$total = 0;
echo $total;
for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total ;
//=> 50005000と表示される


//$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください。
$fruits = array("strawberry","orange","kiwi","coconut","cherry");
foreach ($fruits as $value) {
  echo $value; 
}


//【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください。

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}
/* 
・最初のスラッシュに米印が足りない
・$i < $end にイコールが足りない
・echo　$iにセミコロンが足りていない
?>
