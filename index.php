<!DOCTYPE html>
<html>
    <head>
        <meta charset="utp-8">
        <title>Insert title here</title>
    </head>

    <body>
    <h1> 영화 다운로드 </h1>
        <ol>
        <?php
        $list = scandir('movie');
        $i = 0;
        while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    ?>
                    <li><?=$list[$i]?> ===> <a href="download.php?filename=<?=$list[$i]?>">다운로드</a></li>
                    <video width="320" height="240" controls>
                      <source src="http://175.211.145.62/movie/<?=$list[$i]?>" type="video/mp4">
                    </video>
                    <?php
                }
            }
            $i = $i + 1;
        }
        ?>
        </ol>
    </body>
</html>
