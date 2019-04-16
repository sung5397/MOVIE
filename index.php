<!DOCTYPE html>
<html>
    <head>
        <meta charset="utp-8">
        <title>Insert title here</title>
    </head> 
    
    <body>
    <h1> 영화 다운로드 </h1>

        <!--  웹화면에서 직접 영화실행 코드

        <video poster="https://movie-phinf.pstatic.net/20190116_108/1547604367067tLRsG_JPEG/movie_image.jpg" controls width="10%" height="10%">
            <source src="./movie_data/그대이름은장미.mp4" type="video/mp4">
        </video>
        -->

        <!--기본 동작 형식-->

        <!--<p>내안의 그놈  ===>  <a href="download.php?filename=내안의 그놈.mkv">다운로드</a></p>-->
        <ol>
        <?php
        $list = scandir('movie_data');
        $i = 0;
        while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
                    ?>
                    <li><?=$list[$i]?> ===> <a href="download.php?filename=<?=$list[$i]?>">다운로드</a></li><br>                    
                    <?php
                }
            }
            $i = $i + 1;
        }
        ?>
        </ol>
    </body>
</html>
