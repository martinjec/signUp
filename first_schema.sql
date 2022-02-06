CREATE TABLE customers(
	`id` int  auto_increment primary key,
    `name` varchar(100),
    `email` varchar(100),
    `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)
;

INSERT INTO customers ( name, email, date)
VALUES 
('Barpapa Bravo','nu@nav.com','Jan 10, 2022'),
('Barpapa Braight','atkal@nav.com,','Jan 10, 2022'),
('Barpapa Papa','nuatkal@nav.com','Jan 10, 2022');

