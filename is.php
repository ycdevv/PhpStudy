﻿<?php
	$id = "자바 웹 개발자";
	$name = "김기원";
	$money = "316,000";

	echo "안녕하세요!! k-디지털<br>";
	echo "클라우드 \"{$id}\" 양성에 오신 것을 환영합니다.<br>";
	echo "담임교사는 '{$name}' 교사이고 앞으로 잘 부탁 드립니다.<br>";
	echo '학생 이름은 \'이용찬\' 이고 앞으로 잘 부탁 드립니다.<br>';
	echo "단위기간은 1달 이고 출석율에 따라 \\{$money}원이 지급됩니다.<br>";
	echo "현재 원화기준 달라기격은 \\1400 : \$1 입니다.";
?>

<p>안녕하세요!! k-디지털</p>
<p>클라우드 "<?=$id?>" 양성에 오신 것을 환영합니다.</p>
<p>담임교사는 '<?=$name?>' 교사이고 앞으로 잘 부탁 드립니다.</p>
<p>단위기간은 1달 이고 출석율에 따라 \<?php echo $money?>원이 지급됩니다.</p>
<p>현재 원화기준 달라기격은 \1400 : $1 입니다.</p>