<html>
<body>
<?php
//1번 문제 
//1 부터 n까지의 숫자를 프린트하고 전체 합과 곱을 구합니다.

$n = 30;
$sum = 0;
$prod = 1;
for($i = 1; $i <= $n; $i++){
   $sum = $i + $sum;
   $prod = $i * $prod;
}
echo "1부터 " .$n."까지의 숫자의 합: " .$sum."<br>";
echo "1부터 " .$n."까지의 숫자의 곱: " .$prod;
?>

<br><br>

<!--문제 2: Sorting -->
<form method="GET" action="task.php"> <!-- php의 이름이 task로 저장되어 있으니 task.php로 바꾸기 -->
정수를 입력하세요 : <input type="text" name="n"><br>
<input type="submit" value="전송">
</form>

<?php
// sort
// 10이상 100이하의 정수 숫자 n 을 입력받아 n개의 정수 랜덤넘버를 생성하고 
// 생성된 결과와 올림차순으로 소팅한 결과를 출력하세요.

if(isset($_GET['n']))
{
   $n = $_GET['n'];
   $dada = array();
   for($i = 0; $i < $n; $i++)
   {
    $dada [$i]= rand(10, 100);
   }
   sort($dada); // 배열 정렬
   echo implode(" ", $dada); // 소팅된 배열 출력
}
?>

<br><br>

<?php
// 문제 3 : Fibonacci
// 100 이하의 정수 숫자 n 을 입력받아 n개의 피보나치 수열과 앞과 뒤항의 비례를 출력하세요
// fi+2 = fi+1 + fi
// i  fi  fi+1 / fi
// 1 1 1
// 2 1 2
// 3 2 1.5
// 4 3 1.666667
// 5 5 1.6
// 6 8

if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $fibonacci = array(1, 1);
    echo "1 1 1<br>";
    echo "2 1 2<br>";
    for ($i = 2; $i < $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2];
      $ratio = $fibonacci[$i-2] / $fibonacci[$i-1];
      echo ($i+1)." ".$fibonacci[$i]." ".$ratio."<br>";
    }
  }
?>

<!--문제 4 : 폼을 이용하여 도형 계산식
• 삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다. width*height/2
• 직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다. width*height
• 원 : 반지름을 입력으로 받아서 면적을 출력한다. pi*radius^2
• 직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다. width*length*height
• 원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다. pi*radius^2*height
• 구 : 반지름을 입력으로 받아서 체적을 출력한다. 4/3*pi*radius^3 -->

<form method="GET" action="formcgi.php">
밑변, 가로를 입력하세요 : <input type="text" name="width"><br>
높이, 세로를 입력하세요 : <input type="text" name="height"><br>
반지름을 입력하세요 : <input type="text" name="radius"><br>
세로를 입력하세요 : <input type="text" name="length"><br>
<input type="submit" value="전송">
</form>

<?php
$triangle = width*height/2;
$rectangle = width*height;
$circle = pi*radius^2;
$parallelepiped = width*length*height;
$cylinder = pi*radius^2*height;
$gu = 4/3*pi*radius^3;
echo ("삼각형 : ".$triangle);
echo ("직사각형 :" .$rectangle);
echo ("원 : ".$circle);
echo ("직육면체 : ".$parallelepiped);
echo ("원통 : ".$cylinder);
echo ("구 : ".$gu);


?>

</body>
</html>


<!--문제 5 : Calendar
몇년 몇월을 입력받아 아래와 같은 달력 테이블을 완성하시오.-->
