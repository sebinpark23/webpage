<html>

<body>


  <?php
  //1번 문제 
  //1 부터 n까지의 숫자를 프린트하고 전체 합과 곱을 구합니다.
  $n = 30;
  $sum = 0;
  $prod = 1;

  for ($i = 1; $i <= $n; $i++) {
    $sum = $i + $sum;
    $prod = $i * $prod;
  }
  echo "1부터 " . $n . "까지의 숫자의 합: " . $sum . "<br>";
  echo "1부터 " . $n . "까지의 숫자의 곱: " . $prod;
  ?>

  <br><br>

  <!--문제 2: Sorting -->
  <form method="GET" action="homework.php"> <!-- php의 이름이 homework로 저장되어 있으니 homework.php로 바꾸기 -->
    정수를 입력하세요 : <input type="text" name="n"><br>
    <input type="submit" value="전송">
  </form>

  <?php
  // sort
  // 10이상 100이하의 정수 숫자 n 을 입력받아 n개의 정수 랜덤넘버를 생성하고 
  // 생성된 결과와 올림차순으로 소팅한 결과를 출력하세요.

  if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $dada = array(); //빈 배열 생성 후 랜덤넘버를 저장
    for ($i = 0; $i < $n; $i++) {
      $dada[$i] = rand(0, 100);
    }
    sort($dada); // 배열 정렬
    echo implode(" ", $dada); // 소팅된 배열 출력, " "로 구분하여 숫자들이 정렬
  }
  ?>

  <br><br>

  <!-- 문제 3 : Fibonacci
100 이하의 정수 숫자 n 을 입력받아 n개의 피보나치 수열과 앞과 뒤항의 비례를 출력하세요
fi+2 = fi+1 + fi
i  fi  fi+1 / fi
1 1 1
2 1 2
3 2 1.5
4 3 1.666667
5 5 1.6
6 8 -->

  <form method="GET" action="homework.php">
    정수를 입력하세요 : <input type="text" name="k"><br>
    <input type="submit" value="전송">
  </form>

  <?php

  if (isset($_GET['k'])) {
    $n = $_GET['k'];
    $fibonacci = array(1, 1);
    echo "1 1 1<br>";
    echo "2 1 2<br>";
    for ($i = 2; $i < $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      $ratio = $fibonacci[$i - 2] / $fibonacci[$i - 1];
      echo ($i + 1) . " " . $fibonacci[$i] . " " . $ratio . "<br>";
    }
  }
  ?>

  <br><br>

  <!--문제 4 : 폼을 이용하여 도형 계산식
• 삼각형 : 밑변과 높이를 입력으로 받아서 면적을 출력한다. width*height/2
• 직사각형 : 가로와 세로를 입력으로 받아서 면적을 출력한다. width*height
• 원 : 반지름을 입력으로 받아서 면적을 출력한다. pi*radius^2
• 직육면체 : 가로, 세로, 높이를 입력으로 받아서 체적을 출력한다. width*length*height
• 원통 : 반지름과 높이를 입력으로 받아서 체적을 출력한다. pi*radius^2*height
• 구 : 반지름을 입력으로 받아서 체적을 출력한다. 4/3*pi*radius^3 -->

  <form method="GET" action="homework.php">
    밑변, 가로를 입력하세요 : <input type="text" name="width"><br>
    높이, 세로를 입력하세요 : <input type="text" name="height"><br>
    반지름을 입력하세요 : <input type="text" name="radius"><br>
    세로를 입력하세요 : <input type="text" name="length"><br>
    <input type="submit" value="전송">
  </form>

  <?php


  if (isset($_GET["width"])) {
    $width = $_GET["width"];
  } else {
    $width = 0;
  }

  if (isset($_GET["height"])) {
    $height = $_GET["height"];
  } else {
    $height = 0;
  }

  if (isset($_GET["radius"])) {
    $radius = $_GET["radius"];
  } else {
    $radius = 0;
  }

  if (isset($_GET["length"])) {
    $length = $_GET["length"];
  } else {
    $length = 0;
  }

  $pi = pi();
  $triangle = $width * $height / 2;
  $rectangle = $width * $height;
  $circle = $pi * pow($radius, 2);
  $parallelepiped = $width * $length * $height;
  $cylinder = $pi * $radius * $radius * $height;
  $sphere = 4 / 3 * $pi * $radius * $radius * $radius;

  echo ("삼각형 : " . $triangle . "<br>");
  echo ("직사각형 :" . $rectangle . "<br>");
  echo ("원 : " . $circle . "<br>");
  echo ("직육면체 : " . $parallelepiped . "<br>");
  echo ("원통 : " . $cylinder . "<br>");
  echo ("구 : " . $sphere . "<br>");

  ?>

  <br><br>

  <!--문제 5 : Calendar
몇년 몇월을 입력받아 아래와 같은 달력 테이블을 완성하시오.-->

  <form method="GET" action="homework.php">
    년도를 입력하세요 : <input type="text" name="year"><br>
    월을 입력하세요 : <input type="text" name="month"><br>
    <input type="submit" value="전송">
  </form>

  <?php
  if (isset($_GET["year"]) && isset($_GET["month"])) //isset을 이용하여 year과 month 값이 있는지 확인
  {
    $year = $_GET["year"];
    $month = $_GET["month"];

    $start_day = date("w", mktime(0, 0, 0, $month, 1, $year)); //시작 요일 구하기
    $last_day = date("t", mktime(0, 0, 0, $month, 1, $year));

    echo "<table>";
    echo "<tr>" . $year . "년 " . $month . "월 달력</tr>";
    echo "<tr><td>일</td> <td>월</td> <td>화</td> <td>수</td> <td>목</td> <td>금</td> <td>토</td></tr>";

    $count = 0;
    echo "<tr>";
    for ($i = 0; $i < $start_day; $i++) {
      echo "<td></td>"; // 시작 요일 이전 공백
      $count++;
    }
    for ($i = 1; $i <= $last_day; $i++) {
      echo "<td>" . $i . "</td>";
      $count++;
      if ($count % 7 == 0) { // 7일마다 다음 줄로 넘어가기
        echo "</tr><tr>";
      }
    }
    // 마지막 주 공백 처리
    for ($i = $count; $count % 7 != 0; $i++) {
      echo "<td></td>";
    }
    echo "</tr>";
    echo "</table>";


    //달력 출력
    if ($month == 2) //2월인 경우
    {
      if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
        for ($i = 1; $i <= 29; $i++) //1일부터 29일까지
        {
          echo "<td>" . $i . "</td>";
          if ($i % 7 == 0) //7일마다 다음 줄로 넘어가기
          {
            echo "</tr><tr>";
          }
        }
      } else {
        for ($i = 1; $i <= 28; $i++) //1일부터 28일까지
        {
          echo "<td>" . $i . "</td>";
          if ($i % 7 == 0) //7일마다 다음 줄로 넘어가기
          {
            echo "</tr><tr>";
          }
        }
      }
    } else if (in_array($month, array(1, 3, 5, 7, 8, 10, 12))) //in_array를 활용하여 mon안에 저 숫자들이 있는지 확인
    {
      for ($i = 1; $i <= 31; $i++) //1일부터 31일까지
      {
        echo "<td>" . $i . "</td>";
        if ($i % 7 == 0) //7일마다 다음 줄로 넘어가기
        {
          echo "</tr><tr>";
        }
      }
    } else {
      for ($i = 1; $i <= 30; $i++) //1일부터 30일까지
      {
        echo "<td>" . $i . "</td>";
        if ($i % 7 == 0) //7일마다 다음 줄로 넘어가기
        {
          echo "</tr><tr>";
        }
      }
      echo "</tr>";
    }
  }


  ?>


</body>

</html>