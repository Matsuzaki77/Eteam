--1 顧客情報 
CREATE TABLE users 
(user_id VARCHAR(100) NOT NULL, 
user_name VARCHAR(50) NOT NULL, 
user_pass VARCHAR(30) NOT NULL, 
user_address VARCHAR(100) NOT NULL, 
PRIMARY KEY(user_id) 
); 

 
--2 商品情報 
CREATE TABLE products 
(product_id VARCHAR(100) NOT NULL, 
 product_name VARCHAR(100) NOT NULL, 
 product_price INTEGER(10) NOT NULL, 
PRIMARY KEY(product_id) 
); 

--5 注文 
CREATE TABLE solds  
(sold_id VARCHAR(10) NOT NULL, 
 cart_id VARCHAR(100) NOT NULL, 
 user_id VARCHAR(100) NOT NULL, 
shohin_id VARCHAR(100)NOT NULL, 
order_date VARCHAR(10)NOT NULL, 
 PRIMARY KEY (sold_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id), 
FOREIGN KEY(cart_id) REFERENCES cart_details  (cart_id), 
FOREIGN KEY(product_id)REFERENCES cart_details (product_id) 
); 

--3 カート 
CREATE TABLE carts 
(cart_id VARCHAR(100) NOT NULL, 
 User_id VARCHAR(100) NOT NULL, 
PRIMARY KEY(cart_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id) 
);

 

--4 カート詳細 
CREATE TABLE cart_details 
(cart_id VARCHAR(100) NOT NULL, 
 product_id VARCHAR(100) NOT NULL, 
Shohin_quanity VARCHAR(1) NOT NULL, 
PRIMARY KEY(cart_id,product_id), 
FOREIGN KEY(cart_id) REFERENCES carts (cart_id), 
FOREIGN KEY(product_id) REFERENCES products (product_id) 
); 

INSERT INTO products(product_id,product_name,product_price)VALUES("0001","熊本馬刺し５種食べ比べセット250ｇ（約5人前）",6980); 
INSERT INTO products(product_id,product_name,product_price)VALUES("0002","一番人気の定番品700g（総重量1kg）",5970); 
INSERT INTO products(product_id,product_name,product_price)VALUES("0003","特典付き国産養殖とらふぐ・セット(3-4人前)送料無料・冷凍",13980); 
INSERT INTO products(product_id,product_name,product_price)VALUES("0004","よくばり冷凍 完熟マンゴーセット 1kg(500g×2袋) ",2890); 
