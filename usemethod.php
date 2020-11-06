<?php
// クラスを定義したファイルの読込み
require_once ("pencil.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>プロパティ・メソッドを使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>プロパティ・メソッドを使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<?php
		// オブジェクト用の配列を作る
		// ここに追加
		$ary = new ArrayObject ();
		
		// オブジェクトを作る
		$item1 = new Pencil ( "バッタ", "H", 100 );
		$item2 = new Pencil ( "三つ星", "B", 80 );
		$item3 = new Pencil ( "かいてる", "H", 120 );
		
		// 配列に要素を追加する
		// ここに追加
		$ary->append ( $item1 );
		$ary->append ( $item2 );
		$ary->append ( $item3 );

		// データ個数の表示
		echo "データ個数：" . $ary->count () . "<br>";
		
		// データの表示
		$cnt = 1;
		foreach ( $ary as $value ) {
		    echo "<p>";
		    echo "<em>商品" . $cnt . "</em><br>";
		    $value->printData ();
		    echo "</p><hr>";
		    $cnt ++;
		}
		?>
	</div>
</body>
</html>