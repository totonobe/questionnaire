<html>
<head>
<meta charset="utf-8">
<title>課題用index_zzz.php</title>
</head>
<style>
body{
	background-color: #AAA;
}
</style>
<body>
<h1>課題用index（データ入力）</h1>
<h2>キャッシュレスサービスについてのアンケート</h2>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	性別：
	<input type="radio" name="difficulty" value="1">男性
	<input type="radio" name="difficulty" value="2">女性
	<input type="radio" name="difficulty" value="3">その他<br>
	EMAIL: <input type="text" name="mail"><br>
	お住まいの都道府県：
	<select name="pref_id">
	<option value="" selected>都道府県</option>
	<option value="1">北海道</option>
	<option value="2">青森県</option>
	<option value="3">岩手県</option>
	<option value="4">宮城県</option>
	<option value="5">秋田県</option>
	<option value="6">山形県</option>
	<option value="7">福島県</option>
	<option value="8">茨城県</option>
	<option value="9">栃木県</option>
	<option value="10">群馬県</option>
	<option value="11">埼玉県</option>
	<option value="12">千葉県</option>
	<option value="13">東京都</option>
	<option value="14">神奈川県</option>
	<option value="15">新潟県</option>
	<option value="16">富山県</option>
	<option value="17">石川県</option>
	<option value="18">福井県</option>
	<option value="19">山梨県</option>
	<option value="20">長野県</option>
	<option value="21">岐阜県</option>
	<option value="22">静岡県</option>
	<option value="23">愛知県</option>
	<option value="24">三重県</option>
	<option value="25">滋賀県</option>
	<option value="26">京都府</option>
	<option value="27">大阪府</option>
	<option value="28">兵庫県</option>
	<option value="29">奈良県</option>
	<option value="30">和歌山県</option>
	<option value="31">鳥取県</option>
	<option value="32">島根県</option>
	<option value="33">岡山県</option>
	<option value="34">広島県</option>
	<option value="35">山口県</option>
	<option value="36">徳島県</option>
	<option value="37">香川県</option>
	<option value="38">愛媛県</option>
	<option value="39">高知県</option>
	<option value="40">福岡県</option>
	<option value="41">佐賀県</option>
	<option value="42">長崎県</option>
	<option value="43">熊本県</option>
	<option value="44">大分県</option>
	<option value="45">宮崎県</option>
	<option value="46">鹿児島県</option>
	<option value="47">沖縄県</option>
	</select>
	<br>
	よく使用しているキャッシュレスサービス（複数回答）：<br>
	<input type="radio" name="difficulty" value="1">LINE Pay
	<input type="radio" name="difficulty" value="2">楽天ペイ
	<input type="radio" name="difficulty" value="3">ヤフースマホ決済
	<input type="radio" name="difficulty" value="4">Origami
	<input type="radio" name="difficulty" value="5">d払い<br>
	<input type="radio" name="difficulty" value="6">PAY ID
	<input type="radio" name="difficulty" value="7">pring
	<input type="radio" name="difficulty" value="8">pixiv PAY
	<input type="radio" name="difficulty" value="9">ゆうちょ Pay
	<input type="radio" name="difficulty" value="10">PayPay<br>
	<input type="radio" name="difficulty" value="11">Quick Pay
	<input type="radio" name="difficulty" value="11">iD
	<br>
	<br>
	契約したキャッシュレスサービスで何円使いましたか？：<br>
	<input type="radio" name="difficulty" value="1">￥1～￥1,000
	<input type="radio" name="difficulty" value="2">￥1,001～￥5,000未満
	<input type="radio" name="difficulty" value="3">￥5,001～￥10,000未満
	<input type="radio" name="difficulty" value="4">￥10,001～￥30,000未満
	<input type="radio" name="difficulty" value="5">￥30,001～以上<br>
	<input type="submit" value="送信">
</form>
<table border="1">
<tr>
<td>列1</td>
<td>列2</td>
<td>列3</td>
</tr>
<tr>
<td>cell1</td>
<td>cell2</td>
<td>cell3</td>
</tr>

</table>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>