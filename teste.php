<?php
$new = $_GET['new'];
$desc = $_GET['desc'];
$url = $_GET['url'];

$fp = fopen('$new.php',"w+"); //aqui deveria criar o arquivo começando com $new, mas não o faz, cria apenas .php

fwrite($fp,"
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>EXEMPLO</title>
<meta http-equiv='Content-Language' content='English' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='CSS/style.css' media='screen' />
</head>
<body>
<div id='wrap'>
<div id='header'>
<div class='headings'>
<h1><a>URL Domain</a></h1>
<h2>Um projeto Empresa ABC</h2>
</div>
</div>
<div align='center'>
<p>URL: $desc</p> // aqui ele deveria inserir o valor da varialvel $desc, o que não acontece, ficando em branco...
<p> </p>
<p>Aguarde...</p>
</div>
<div style='clear: both;'> </div>
</div>
</body>
</html>
<META HTTP-EQUIV='REFRESH' CONTENT='4; URL=$url'> // aqui ele deveria inserir o valor da varialvel $url, tambem não acontece...
");

?><?php

$new = $_GET['new'];
$desc = $_GET['desc'];
$url = $_GET['url'];

$fp = fopen('$new.php',"w+"); //aqui deveria criar o arquivo começando com $new, mas não o faz, cria apenas .php

fwrite($fp,"
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>EXEMPLO</title>
<meta http-equiv='Content-Language' content='English' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='CSS/style.css' media='screen' />
</head>
<body>
<div id='wrap'>
<div id='header'>
<div class='headings'>
<h1><a>URL Domain</a></h1>
<h2>Um projeto Empresa ABC</h2>
</div>
</div>
<div align='center'>
<p>URL: $desc</p> // aqui ele deveria inserir o valor da varialvel $desc, o que não acontece, ficando em branco...
<p> </p>
<p>Aguarde...</p>
</div>
<div style='clear: both;'> </div>
</div>
</body>
</html>
<META HTTP-EQUIV='REFRESH' CONTENT='4; URL=$url'> // aqui ele deveria inserir o valor da varialvel $url, tambem não acontece...
");

?><?php

$new = $_GET['new'];
$desc = $_GET['desc'];
$url = $_GET['url'];

$fp = fopen('$new.php',"w+"); //aqui deveria criar o arquivo começando com $new, mas não o faz, cria apenas .php

fwrite($fp,"
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<title>EXEMPLO</title>
<meta http-equiv='Content-Language' content='English' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel='stylesheet' type='text/css' href='CSS/style.css' media='screen' />
</head>
<body>
<div id='wrap'>
<div id='header'>
<div class='headings'>
<h1><a>URL Domain</a></h1>
<h2>Um projeto Empresa ABC</h2>
</div>
</div>
<div align='center'>
<p>URL: $desc</p> // aqui ele deveria inserir o valor da varialvel $desc, o que não acontece, ficando em branco...
<p> </p>
<p>Aguarde...</p>
</div>
<div style='clear: both;'> </div>
</div>
</body>
</html>
<META HTTP-EQUIV='REFRESH' CONTENT='4; URL=$url'> // aqui ele deveria inserir o valor da varialvel $url, tambem não acontece...
");

?>