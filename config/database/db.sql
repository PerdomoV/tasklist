CREATE DATABASE tasklist;

use tasklist;

CREATE TABLE tasklist(
  id int(255) auto_increment not null,
  name varchar(40) not null,
  description varchar(100),
  fecha date,
  CONSTRAINT pk_users PRIMARY KEY(id), 
  CONSTRAINT uq_name UNIQUE(name)
)ENGINE=InnoDb;


INSERT INTO tasklist VALUES(null, 'Suicidarme', '', '');

