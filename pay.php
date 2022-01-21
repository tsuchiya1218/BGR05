<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>商品詳細</title>
</head>

<body>
    <h1>ノートパソコン通販</h1>
    <h2>支払方法</h2>
    <form method="POST" action="top.php" >
        <p>支払方法を選んでください。<br>
            <input type="radio" name="gender" value="male" />クレジットカード
            <input type="radio" name="gender" value="female" />コンビニ決済
        </p>
        <input type="button" value="戻る">
        <input type="submit" value="送信">
    </form>  