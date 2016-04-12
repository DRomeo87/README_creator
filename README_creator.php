<html>
<head>
    <title>README_creator</title>
    <link type="text/css" href="style.css" rel="stylesheet">
    <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="README_creator.php">
    <textarea class="text-left" name="titulo" placeholder="TITLE"></textarea><br/>
    <textarea class="text-left" name="subtitulo" placeholder="SUBTITLE"></textarea><br/>
    <textarea rows="20" cols="55" class="text-left" name="cuerpo" placeholder="CONTENT"></textarea><input class="text-left" placeholder="CHARS PER LINE" type="number" name="longitud" maxlength="100"><br/>
    <textarea class="text-left" name="version" placeholder="VERSION"></textarea><br/>
    <textarea class="text-left" name="autor" placeholder="AUTHOR"></textarea><br/>
    <input class="text-left" type="submit">
</form>
    <blockquote class="text-left">
        <?php

        //-.-TITLE-.-//
        echo "<p>";
        if (!empty($_POST['titulo'])){
            $titulo = $_POST['titulo'];
            echo "//-.***".mb_strtoupper($titulo)."***.-//<br/>";
            echo "<br/>";
        }
        echo "<p>";

        //-.-SUBTITLE-.-//
        if (!empty($_POST['subtitulo'])){
            $subtitulo = $_POST['subtitulo'];
            echo "-------".mb_strtolower($subtitulo)."-------<br/>";
            for ($i = 0; $i <= mb_strlen($subtitulo)+13 ; $i++) {
                echo "-";
            }
            echo "<br/>";
        }
        echo "<br/>";

        //-.-CONTENT-.-//
        if (!empty($_POST['longitud'])){
            $longitud = $_POST['longitud'];//Lenght of chars per line
        }else{
            $longitud = 60;
        }

        if (!empty($_POST['cuerpo'])){
            $cuerpo = $_POST['cuerpo'];

            for ($y = 0; $y <= $longitud+1; $y++){
                echo "*";
            }
            echo"<br/>*";

            $chars = str_split($cuerpo);
            $i = 0;

            foreach($chars as $char){

                if ($i >= $longitud AND $i%$longitud == 0) {
                    echo "*<br/>*";
                    echo $char;
                    $i++;
                }else{
                    echo $char;
                    $i++;
                }
            }
            
            while ($i % $longitud != 0) {
                echo "&nbsp;";
                $i++;
            }
                echo "*<br/>";
            for ($y = 0; $y <= $longitud+1; $y++){
                echo "*";
            }
            echo "<br/>";
        }

        //-.-VERSION-.-//
        if (!empty($_POST['version'])){
            $version = $_POST['version'];
            echo "Version:  ".$version."<br/>";
        }

        //-.-AUTHOR-.-//
        if (!empty($_POST['autor'])){
            $version = $_POST['autor'];
            echo "Autor:    ".$version;
        }
        ?>
    </blockquote>
</body>
</html>
