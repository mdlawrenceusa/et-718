CREATE TABLE card_payment (
   posted text NOT NULL,
   order_id varchar(25) NOT NULL,
   PaymentMethod text NOT NULL,
   CreditCard text NOT NULL,
   ExpDate text NOT NULL,
   AMOUNT text NOT NULL,
   PRIMARY KEY (order_id),
   UNIQUE order_id (order_id)
);



CREATE TABLE products (
   maingroup varchar(50),
   secondgroup varchar(50),
   code_no varchar(30) NOT NULL,
   item varchar(100),
   text text,
   price varchar(20),
   image varchar(30),
   shipping varchar(20),
   PRIMARY KEY (code_no)
);
