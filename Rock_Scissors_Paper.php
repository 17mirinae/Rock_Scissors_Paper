<html>
<body>
  <form action="assg3.php" method="GET">
    <h1>가위, 바위, 보 게임</h1><br>
    입력 :<input type=text name="na">
    <input type=submit>
  </form>
<!--form2.php-->
<?php
    
    $Person = $_GET['na'];    
    
    echo "학번 : 2017301067   이름 : 정민지<br>";
    
    $comArr = array(0=>"가위", 1=>"바위", 2=>"보");
        
    $comIndex = rand(0, 2);

      $id=$_GET['sku']; 
  $count = $_COOKIE['count']; 
  SetCookie("sku",$id,time()+3600); 
  SetCookie("count",++$count,time()+3600); 
  echo $_COOKIE['sku']."님 <b>$count</b>번째 방문객입니다<br>"; 
    
    if($comIndex == 0) { #컴퓨터 가위
    echo "컴퓨터는 ".$comArr[$comIndex]."를 냈습니다.<br>";
       echo "<img src='scissors.png'><br>";
        
    echo "정민지씨는 ".$_GET['na']."를 냈습니다.<br>";
        if($Person == '가위') {
            echo "<img src='scissors.png'>";
            echo "무승부입니다.";
        }
        else if($Person == '바위') {
            echo "<img src='rock.png'>";
            echo "승리입니다.";
        }
        else if($Person == '보') {
            echo "<img src='paper.jpg'>";
            echo "패배입니다.";
        }

    }
    else if($comIndex == 1) { #컴퓨터 바위
        echo "컴퓨터는 ".$comArr[$comIndex]."를 냈습니다.<br>";
        echo "<img src='rock.png'><br>";
        
    echo "정민지씨는 ".$_GET['na']."를 냈습니다.<br>";
        if($Person == '가위') {
            echo "<img src='scissors.png'>";
            echo "패배입니다.";
        }
        else if($Person == '바위') {
            echo "<img src='rock.png'>";
            echo "무승부입니다.";
        }
        else if($Person == '보') {
            echo "<img src='paper.jpg'>";
            echo "승리입니다.";
        }
    }
    else if($comIndex == 2) { #컴퓨터 보
        echo "컴퓨터는 ".$comArr[$comIndex]."를 냈습니다.<br>";
        echo "<img src='paper.jpg'><br>";
        
    echo "정민지씨는 ".$_GET['na']."를 냈습니다.<br>";
        if($Person == '가위') {
            echo "<img src='scissors.png'>";
            echo "승리입니다.";
        }
        else if($Person == '바위') {
            echo "<img src='rock.png'>";
            echo "패배입니다.";
        }
        else if($Person == '보') {
            echo "<img src='paper.jpg'>";
            echo "무승부입니다.";
        }
    }

?>
</body>
</html>