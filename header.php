<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); //文字コードの設定?>">
	<meta name="viewport" content="width=device-width">
	<title>コード学習用テーマ</title>
	<link rel='stylesheet' href='<?php echo get_stylesheet_uri() //CSSの読み込み（ここでは簡易的に直接記述しています） ?>'>
</head>
<body>
<div>
<?php date_default_timezone_set( 'Asia/Tokyo' ); //date()関数用にタイムゾーンを設定（P.065MEMO参照） ?>