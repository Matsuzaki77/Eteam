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
 product_price INT(10) NOT NULL, 
 product_img VARCHAR(100) NOT NULL,
PRIMARY KEY(product_id) 
); 

--3 カート 
CREATE TABLE carts 
(cart_id INT(10) NOT NULL, 
user_id VARCHAR(100) NOT NULL,
PRIMARY KEY(cart_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id) 
);

 

--4 カート詳細 
CREATE TABLE cart_details 
(cart_id INT(10) NOT NULL, 
 product_id VARCHAR(100) NOT NULL, 
Shohin_quanity INT(10) NOT NULL, 
PRIMARY KEY(cart_id,product_id), 
FOREIGN KEY(cart_id) REFERENCES carts (cart_id), 
FOREIGN KEY(product_id) REFERENCES products (product_id) 
); 

--5 注文 
CREATE TABLE solds  
(sold_id INT(10) NOT NULL, 
 cart_id INT(10) NOT NULL, 
 user_id VARCHAR(100) NOT NULL, 
product_id VARCHAR(100)NOT NULL, 
order_date DATE NOT NULL, 
 PRIMARY KEY (sold_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id), 
FOREIGN KEY(cart_id) REFERENCES cart_details  (cart_id), 
FOREIGN KEY(product_id)REFERENCES cart_details (product_id) 
); 

INSERT INTO products(product_id,product_name,product_price,product_img)VALUES("1","熊本馬刺し５種食べ比べセット250ｇ（約5人前）",6980,"basashi.jpg"); 
INSERT INTO products(product_id,product_name,product_price,product_img)VALUES("2","一番人気のカニ定番品700g（総重量1kg）",5970,"kani.jpg"); 
INSERT INTO products(product_id,product_name,product_price,product_img)VALUES("3","特典付き国産養殖とらふぐ・セット(3-4人前)送料無料・冷凍",13980,"fugu.jpg"); 
INSERT INTO products(product_id,product_name,product_price,product_img)VALUES("4","よくばり冷凍 完熟マンゴーセット 1kg(500g×2袋) ",2890,"mango.jpg"); 

INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101201@s.asojuku.ac.jp","藤元","2101201","福岡県筑紫野市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101188@s.asojuku.ac.jp","永田","2101188","福岡県小郡市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101135@s.asojuku.ac.jp","石崎","2101135","福岡県三潴郡");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101208@s.asojuku.ac.jp","松﨑","2101208","福岡県福岡市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101236@s.asojuku.ac.jp","米本","2101236","山口県山口市");

--ALTER TABLE products ADD COLUMN product_image VARCHAR(100); 追加の列