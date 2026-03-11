CREATE TABLE IF NOT EXISTS admin(
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(50)
);

INSERT INTO admin(username,password)
VALUES('admin','123');

CREATE TABLE IF NOT EXISTS products(
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price INT,
  stock INT
);

CREATE TABLE IF NOT EXISTS orders(
  id INT AUTO_INCREMENT PRIMARY KEY,
  product_name VARCHAR(100),
  customer VARCHAR(100),
  status VARCHAR(50)
);