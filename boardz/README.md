# boardz
게시판 검색 기능 완성하기

## 기존 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.html
```

## 추가 및 수정된 파일
```
 .
├── css
│   └── style.css
├── src
│   └── boardz.css
├── board.php (수정)
```

## board.php (수정)
```
mysql함수들이 대부분 deprecated 되어 mysqli를 이용하였습니다.

$sql = "SELECT * FROM boardz WHERE title LIKE '%{$_POST[search]}%';";
-> mysqli_query를 이용해 쿼리를 전송하여 $result 변수에 저장합니다.

1. 이번 과제는 최대 3개의 ul을 만들어야 하므로 $first, $second, $third라는 3개의 배열 변수를 만들었습니다.
2. for문 안에서 mysqli_fetch_array를 반복하며 item을 만들고, $first 배열부터 순서대로 item을 넣습니다.
3. 반복이 끝나면 $first 배열부터 순서대로 ul을 만들어 출력하는 알고리즘입니다.
```