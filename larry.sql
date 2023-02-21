CREATE TABLE appointments (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  phone varchar(20) NOT NULL,
  date date NOT NULL,
  time time NOT NULL,
  message text NOT NULL,
  PRIMARY KEY (id)
);
