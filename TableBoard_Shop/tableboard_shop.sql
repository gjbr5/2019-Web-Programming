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