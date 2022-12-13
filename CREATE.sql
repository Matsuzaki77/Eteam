
CREATE TABLE users 
(user_id VARCHAR(100) NOT NULL, 
user_name VARCHAR(50) NOT NULL, 
user_pass VARCHAR(30) NOT NULL, 
user_address VARCHAR(100) NOT NULL, 
PRIMARY KEY(user_id) 
); 

 

CREATE TABLE products 
(product_id VARCHAR(100) NOT NULL, 
 product_name VARCHAR(100) NOT NULL, 
 product_price INT(10) NOT NULL, 
 product_img VARCHAR(100) NOT NULL,
 product_detail VARCHAR(800) NOT NULL,
PRIMARY KEY(product_id) 
); 


CREATE TABLE carts 
(cart_id INT AUTO_INCREMENT NOT NULL, 
user_id VARCHAR(100) NOT NULL,
PRIMARY KEY(cart_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id) 
);

 


CREATE TABLE cart_details 
(cart_id INT AUTO_INCREMENT NOT NULL, 
 product_id VARCHAR(100) NOT NULL, 
shohin_quantity INT(10) NOT NULL, 
PRIMARY KEY(cart_id), 
FOREIGN KEY(cart_id) REFERENCES carts (cart_id),
FOREIGN KEY(product_id) REFERENCES products (product_id) 
); 

 
CREATE TABLE solds  
(sold_id INT AUTO_INCREMENT NOT NULL, 
 cart_id INT NOT NULL, 
 user_id VARCHAR(100) NOT NULL,  
order_date DATETIME NOT NULL, 
 PRIMARY KEY (sold_id), 
FOREIGN KEY(user_id) REFERENCES users (user_id), 
FOREIGN KEY(cart_id) REFERENCES cart_details  (cart_id) 
); 

INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("1","熊本馬刺し５種食べ比べセット250ｇ（約5人前）",6980,"basashi.jpg",
"・赤身馬刺し（約50g）1パック\n・霜降り（中トロ）馬刺し（約50g）1パック\n・大トロ馬刺し（約50g）1パック\n・たてがみ刺し（約50g）1パック\n・馬ヒレ 馬刺し用（約50g）1パック"); 
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("2","一番人気のカニ定番品700g（総重量1kg）",5970,"kani.jpg","
・一番人気の定番品700g 総重量1kg\n・特大棒ポーション400g 総重量500g\n・特大爪/爪下/肩肉800g 総重量1.1kg"); 
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("3","特典付き国産養殖とらふぐ・セット(3-4人前)送料無料・冷凍",13980,"fugu.jpg",
"・とらふぐ刺身 約100g\n・鍋用上身 約200g\n・鍋用アラ 約400g\n・選べる特典品1点\n・ふぐ皮湯引き 約80g\n・ツミレ 8個\n・フグヒレ 2～3枚\n・ポン酢、薬味"); 
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("4","よくばり冷凍 完熟マンゴーセット 1kg(500g×2袋) ",2890,"mango.jpg",
"よくばり 冷凍完熟マンゴーセット 1kg(500g×2袋)\n【内容量】1kg(500g×2袋)\n【保存方法】　冷凍\n【賞味期限】　製造より2年\nマンゴーの種類： その他マンゴー\n温度帯： 冷凍");
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("5","かぼすぶり丼 大分県産 季節限定かぼすぶり丼 70g×4袋セット",3480,"buri.jpg",
"商品名：かぼすぶり丼\n名称：海産物加工品\n内容量：かぼすぶり丼 70g×4袋\n賞味期限：パッケージに記載（約90日）\n保存方法：冷凍(-18度以下)で保存してください。\nお召し上がり方：流水で解凍し、温かいご飯にかければ出来上がりです。\n区分：食品");

INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("7","厳選トマト 桃太郎 約4kg",3980,"tomato.jpg",
"商品名：桃太郎トマト\n重量(箱込み)：約4kg\n保存方法：冷蔵庫や冷暗所などの涼しい場所で保存して下さい。\n賞味期限:4日前後目安");
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("6","広島風お好み焼き (豚玉そば入り・イカ天入り)　お試し３枚セット",3500,"okonomiyaki.jpg",
"お好み焼き　そば入り500ｇ前後(特製ソース50ｇ・青のり0.5ｇ含む)×3\n広島風お好み焼きは、袋のまま切れ目を入れ、電子レンジで温めてください。\n５００Ｗで約９分３０秒　６００Ｗで約８分３０秒");
INSERT INTO products(product_id,product_name,product_price,product_img,product_detail)VALUES("","",,"","");

INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101201@s.asojuku.ac.jp","藤元","2101201","福岡県筑紫野市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101188@s.asojuku.ac.jp","永田","2101188","福岡県小郡市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101135@s.asojuku.ac.jp","石崎","2101135","福岡県三潴郡");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101208@s.asojuku.ac.jp","松﨑","2101208","福岡県福岡市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("2101236@s.asojuku.ac.jp","米本","2101236","山口県山口市");
INSERT INTO users(user_id,user_name,user_pass,user_address)VALUES("aso1234@s.asojuku.ac.jp","麻生","Aiueo1234","福岡県福岡市");
