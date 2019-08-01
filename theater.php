<!DOCTYPE html>
<html>
    <head>
        <meta charset="utp-8">
        <title>최신 영화관</title>
    </head>
    <style>
      #head {
              border-bottom: 10px solid red;
              color: black;
              margin: 1px;
              text-align: center;
      }
      ol {
              display: grid;
              color: black;
              border-right: 5px solid pink;
              margin: 0px;
              padding: 30px;
      }
      #columns{
        border:3px solid pink;
        display: grid;
        grid-template-columns: 200px 1fr;
      }
      #main_grid{
        padding: 30px;
        font-size: 20px;
      }
    </style>
    <body>
      <div id="head">
        <h1> 영화 감상 </h1>
      </div>
      <div id="columns">
        <ol>
            <li><a href="index.html">한국영화보기</a></li>
            <li><a></a>외국영화보기</li>
        </ol>
        <div id="main_grid">
            <?php
            $list = scandir('movie');
            $i = 0;
            while($i < count($list)){
              if($list[$i] != '.'){
                  if($list[$i] != '..'){
                      ?>
                      <li>
                      <?=$list[$i]?><p>
                      <video width="480" height="360" controls>
                        <source src="http://kimsmovie.iptime.org/movie/<?=$list[$i]?>" type="video/mp4">
                      </video><br><br><br>
                      </li>
                      <?php
                  }
              }
              $i = $i + 1;
            }
            ?>
        </div>
      </div>
      <a>(다운로드 없이 바로 감상하실 수 있습니다.)</a>

</body>
</html>
