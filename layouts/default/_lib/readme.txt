이 폴더안에 css 또는 js 파일을 업로드 후 _header.import.php 또는 _footer.import.php 에 다음과 같이 소스코드를 작성하면 자동으로 삽입됩니다.

1) _header.import.php 작성코드는 <head> 안의 jquery , bootstrap 다음에 삽입
2) _footer.import.php 작성코드는 <body> 안의 마지막에 삽입

<link href="<?php echo $g['url_layout']?>/_lib/파일명.css" rel="stylesheet">
<script src="<?php echo $g['url_layout']?>/_lib/파일명.js"></script> 


