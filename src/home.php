<!DOCTYPE html>
<html>
  <head>
    <title>홈 화면</title>
    <meta charset="UTF-8">
    <meta author="2116016 임서현">
    <!--인라인 스타일 시트 삽입-->
    <style type="text/css">
        /* 태그 선택자 */
        h1 {font-family: "타이포_크레파스 M", "Cooper Blk BT"; font-size: 40pt; text-align: center;}
        footer {font-size: 10pt; margin-top: 100px; text-align: center; }
        /* 클래스 선택자 */
        .main {width: 100%; margin-top: 120px; }
        .playname {font-family: "상상토끼 꽃길"; font-size: 25pt; padding: 30px;}
        .text2 {margin-top: 200px; margin-left: 30px}
        .red1 {color: red; font-weight: bolder; }
        /* 아이디 선택자 */
        #text {margin-top: 80px; text-align: center;}
        #b1 {position: absolute; top: 20px; right: 20px; }
    </style>
    <script>
      // 놀이종료 버튼에 해당하는 이벤트 핸들러 함수 end() 정의
      function end() {
        var answer = confirm("놀이를 종료하시겠습니까?");
        if (answer == true) {
          window.location.href = "end.html";
        }
      }
    </script>
  </head>
  <body>
    <div class="main">
    <header>
      <h1>LSH's PlayGround</h1><br>
      <div style="text-align: center">
      <!--php로 앞에서 작성한 정보 불러오기-->
      <?php
          $name = $_GET["u_name"];
          $age = $_GET["u_age"];
          $sex = $_GET["u_sex"];
      ?>
      <strong>
      <?php echo $age."세($sex)"." ".$name."님 오늘도 즐겁게 놀아보아요!";?>
      </strong>
      </div>
      <!--놀이 종료 버튼-->
      <button id="b1" onclick="end();"> 놀이 종료하기 </button> 
      <p style="text-align: center">
        어떤 놀이를 해볼까요? 원하는 놀이를 선택해주세요 :)
      </p>
      <!--각 게임에 대한 설명을 링크 연결을 통해 문서 내 이동--> 
      <nav>
        <div style="text-align: center">
        <a href="drawing.html" title="그림 그리기">
          <span class="playname"> 그림 그리기 </span>
        </a>
        <a href="cardplay.html" title="색칠하기">
          <span class="playname"> 카드 놀이 </span>
        </a>
        <a href="colorplay.html" title="옷 입히기">
          <span class="playname"> 색깔 놀이 </span>
        </a>
        </div>
      </nav>
      <div id=text>
      <small><strong>* 부모님께 * </strong><br>
         아래쪽에 놀이를 더욱 즐길 수 있는 방법이 나와있습니다 :) <br>
        참고하시면 아이와 더욱 알차고 즐거운 놀이시간을 보낼 수 있습니다! 
      </small>
      </div>
    </header>
    <!--게임에 대한 설명-->
    <article > 
      <p style="margin-top: 80px; margin-left: 20px"><strong>[아이와 함께 놀이를 즐기는 방법]</strong></p>
      <ul>
        <p><li><a href="#game1">그림 그리기</a></li></p>
        <p><li><a href="#game2">카드 놀이</a></li></p>
        <p><li><a href="#game3">색깔 놀이</a></li></p>
      </ul>
      <section class="text2">
        <a id="game1"><h3>* 그림 그리기 *</h3></a>
        <p> 마우스의 왼쪽 버튼을 누른 상태로 화면에 있는 칠판에 그림을 그릴 수 있는 놀이입니다 :)</p>
          <p><strong>[추천하는 3가지 놀이 방법]</strong><br>
          1. 아이가 원하는 그림을 자유롭게 그릴 수 있도록 해주기<br>
          2. (부모님께서) 아이에게 제시어를 주고 그려보는 놀이하기<br>
          3. (부모님께서) 그린 그림을 아이가 맞춰보기</p>
      </section>
      <section class="text2">
        <a id="game2"><h3>* 카드 놀이 *</h3></a>
        <p> 카드 아래에 있는 '다음'버튼을 누르면 <strong>랜덤으로</strong> 과일 이미지가 변경되는 카드 놀이입니다 :)<br>
        (처음은 빈 화면에서 시작합니다)<br>
          과일(10종류): 사과, 포도, 딸기, 망고, 오렌지, 체리, 바나나, 수박, 블루베리, 키위</p>
          <p><strong>[추천하는 3가지 놀이 방법]</strong><br>
          1. 아직 단어공부를 하는 아이라면, 과일 이름 공부하기<br>
          2. 과일 하나를 정해서 그 과일이 나오면 과일 이름 외치기<br>
          &nbsp (순발력 게임하기 - 버튼을 빠르게 눌러 이미지를 넘겨주세요.) <br>
          3. 과일 하나를 정해서 일정한 개수의 이미지를 보여준 후, 그 과일이 나온 횟수 맞히기</p>
      </section>
      <section class="text2">
        <a id="game3"><h3>* 색깔 놀이 *</h3></a>
        <p> 제시된 색상에 해당하는 버튼을 누르는 놀이입니다 :)</p>
          <p><strong>[놀이 방법]</strong><br>
          처음 뜨는 화면은 흰색이 아니라, 빈 공간입니다.<br>
          '시작' 버튼을 누르시면 화면에 색상이 뜹니다.<br>
          각 색상 버튼은 색상이 뜨는 화면의 양 옆에 있습니다.<br>
          제시된 색상에 해당하는 색상 버튼을 누르면 '참 잘했어요!!'라는 메세지가 뜨고,<br>
          '확인'을 누르면 화면의 색상이 변경됩니다.<br>
          제시된 색상과 다른 생상 버튼을 누르면 '다시 한번 시도해보세요 :)'라는 메세지가 뜨고,<br>
          '확인'을 누르면 다시 색상 버튼을 선택하실 수 있습니다.</p>
          <p><strong>&lt;색상 버튼을 사용하지 않고, 구두로 놀이를 즐기는 경우&gt;</strong><br>
          '시작'버튼을 누르셔도 화면의 색상을 바꾸실 수 있습니다 :)</p>
          <p><strong><span class="red1">!!</span>
          랜덤으로 색상이 변경되므로 같은 색상이 연속으로 두번이상 나오는 경우도 있습니다.
          <span class="red1">!!</span></strong></p>
      </section>
    </article>
    <footer>
        <strong>LSH</strong> Copyright © LSH Corp. All Rights Reserved.
    </footer>
    </div>
  </body>
</html>