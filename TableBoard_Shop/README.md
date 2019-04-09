# TableBoard_Shop
게시판-Shop 의 TODO 완성하기!

## 기존 파일
```
 .
├── css - board_form.php와 index.php 에서 사용하는 stylesheet
│   └── ...
├── fonts - 폰트
│   └── ...
├── images - 아이콘 이미지
│   └── ...
├── vender - 외부 라이브러리
│   └── ...
├── js - board_form.php와 index.php 에서 사용하는 javascript
│   └── ...
├── function
│   └── insert.php - 게시글 작성 기능 구현
│   └── update.php - 게시글 수정 기능 구현
│   └── delete.php - 게시글 삭제 기능 구현
├── board_form.php - 게시글 작성/수정 시 사용하는 form이 포함된 php 파일
├── index.php - 게시글 조회 기능 구현
```

## MySQL 테이블 생성!
Note: 
- table 이름은 tableboard_shop 으로 생성
- 기본키는 num 으로, 그 외의 속성은 board_form.php 의 input 태그 name 에 표시된 속성 이름으로 생성
- 각 속성의 type 은 자유롭게 설정 (단, 입력되는 값의 타입과 일치해야 함)
    - ex) price -> int
    - ex) name -> char or varchar
```
CREATE TABLE tableboard_shop (
num INT PRIMARY KEY,
date DATETIME,
order_id INT,
name VARCHAR(100),
price DECIMAL(10,2),
quantity INT
);

INSERT INTO tableboard_shop VALUES
(0, '2017-09-29 01:22', 200398, 'iPhone X 64Gb Grey', 999.00, 1),
(1, '2017-09-28 05:57', 200397, 'Samsung S8 Black', 756.00, 1),
(2, '2017-09-26 05:57', 200396, 'Game Console Controller', 22.00, 2),
(3, '2017-09-25 23:06', 200392, 'USB 3.0 Cable', 10.00, 3),
(4, '2017-09-24 05:57', 200391, 'Smartwatch 4.0 LTE Wifi', 199.00, 6),
(5, '2017-09-23 05:57', 200390, 'Camera C430W 4k', 699.00, 1),
(6, '2017-09-22 05:57', 200389, 'Macbook Pro Retina 2017', 2199.00, 1),
(7, '2017-09-21 05:57', 200388, 'Game Console Controller', 999.00, 1),
(8, '2017-09-19 05:57', 200387, 'iPhone X 64Gb Grey', 999.00, 1),
(9, '2017-09-18 05:57', 200386, 'iPhone X 64Gb Grey', 999.00, 1),
(10, '2017-09-22 05:57', 200389, 'Macbook Pro Retina 2017', 2199.00, 1),
(11, '2017-09-21 05:57', 200388, 'Game Console Controller', 999.00, 1),
(12, '2017-09-19 05:57', 200387, 'iPhone X 64Gb Grey', 999.00, 1),
(13, '2017-09-18 05:57', 200386, 'iPhone X 64Gb Grey', 999.00, 1);
```
## index.php 수정
DB 연결 후,
```
SELECT num, date, order_id, name, price, quantity, price * quantity AS "total" FROM tableboard_shop;
```
라는 SQL문을 실행해 데이터를 받아온 후,
```
for ($i = 0; $i < $num; $i++) {
    $row = mysqli_fetch_array($table);
    echo "
<tr onclick=\"location.href = ('board_form.php?num={$row['num']}')\">
    <td class=\"column1\">{$row['date']}</td>
    <td class=\"column2\">{$row['order_id']}</td>
    <td class=\"column3\">{$row['name']}</td>
    <td class=\"column4\">\${$row['price']}</td>
    <td class=\"column5\">{$row['quantity']}</td>
    <td class=\"column6\">\${$row['total']}</td>
</tr>";
}
```
이상의 반복문을 통해 값을 출력시켰습니다.
## function
### insert.php 수정
insert_valid() 함수를 작성해 입력값을 검증하고,
```
SELECT num+1 AS "num" FROM tableboard_shop ORDER BY num DESC LIMIT 1;
```
위 Query로 가장 최신글의 num값에 1을 더해 입력할 레코드의 num값으로 삼고,
```
INSERT INTO tableboard_shop VALUES
({$num}, '{$_POST['date']}', {$_POST['order_id']}, '{$_POST['name']}', {$_POST['price']}, {$_POST['quantity']});
```
위 Query로 DB에 데이터를 삽입했습니다.

잘못된 값이 입력되거나 삽입에 실패한 경우 "삽입 실패"라는 alert창이 뜨게 만들었습니다.

### update.php 수정
update.php는 update_valid() 함수로 입력값 검증 후, num값이 DB에 들어있는지 확인하였습니다.
```
UPDATE tableboard_shop
SET date='{$_POST['date']}', order_id={$_POST['order_id']}, name='{$_POST['name']}',
price={$_POST['price']}, quantity={$_POST['quantity']}
WHERE num={$num};
```
검증이 끝난 후에는 위 Query로 DB에 데이터를 수정했습니다.

update.php도 마찬가지로 잘못된 값이 입력되거나 수정에 실패한 경우 "수정 실패"라는 alert창이 뜨게 만들었습니다.
### delete.php 수정
delete.php도 역시 입력값 검증 후,
```
DELETE FROM tableboard_shop WHERE num={$_GET['num']};
```
위 Query로 DB에서 데이터를 삭제하였습니다.

삭제하지 못한 경우 "삭제 실패"라는 alert창이 뜨게 만들었습니다.
