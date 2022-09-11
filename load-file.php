<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Base64 string to a file in form</title>

		<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    </head>

    <style>
        ul {
            display: flex;
            align-item: center;
            flex-wrap: wrap;
        }
        li {
            width: 30%;
            list-style: none;
            border: 1px solid;
        }

        img {
            width: 100%;
        }
    </style>
    <body>

    <ul>
        <?php
            $files = glob("upload/*.*");

            usort($files, function($a, $b){ // check time
                return (filemtime($a) < filemtime($b));
            });

            for ($i=0; $i<count($files); $i++) {
                $num = $files[$i];
                echo    '<li> 
                            <a href="__URL__">'. 
                                '<img src="'.$num.'" alt="random image">' .
                                '<span class="hidden" hidden>' . $num. '</span>' .  
                            '</a> 
                        </li>';
            }
        ?>
    </ul>


    </body>

   
</html>