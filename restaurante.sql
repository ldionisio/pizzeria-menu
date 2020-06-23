
CREATE DATABASE IF NOT EXISTS pizza_menu;
use pizza_menu;

CREATE TABLE Menu (
id  int PRIMARY KEY auto_increment,
item varchar(100) NOT NULL,
precio decimal(4,2) NOT NULL,
id_padre int NOT NULL
);

INSERT INTO Menu (item, precio, id_padre) VALUES ("especialidades", 0, 0);
INSERT INTO Menu (item, precio, id_padre) VALUES ("clasicas", 0, 0);
INSERT INTO Menu (item, precio, id_padre) VALUES ("picantes", 0, 0);
INSERT INTO Menu (item, precio, id_padre) VALUES ("gourmets", 0, 0);
INSERT INTO Menu (item, precio, id_padre) VALUES ("familiares", 0, 0);
INSERT INTO Menu (item, precio, id_padre) VALUES ("aperitivos", 0, 0);

INSERT INTO Menu (item, precio, id_padre) VALUES ("De la huerta", 10.50, 1);
INSERT INTO Menu (item, precio, id_padre) VALUES ("8 quesos", 10.40, 1);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Pollo BBQ", 11.00, 1);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Cabra balsámica", 10.90, 1);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Vegetariana ", 10.95, 1);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Extra crispy", 11.05, 1);

INSERT INTO Menu (item, precio, id_padre) VALUES ("BBQ", 7.00, 2);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Caprichosa", 6.50, 2);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Margarita", 6.00, 2);
INSERT INTO Menu (item, precio, id_padre) VALUES ("4 quesos", 7.20, 2);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Hawaiana", 6.75, 2);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Carbonara", 6.90, 2);

INSERT INTO Menu (item, precio, id_padre) VALUES ("Vegetariana hot", 8.00, 3);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Curry rojo", 8.30, 3);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Curry pollo", 8.20, 3);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Boloñesa hot", 7.50, 3);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Americana", 7.75, 3);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Peperoni", 7.00, 3);

INSERT INTO Menu (item, precio, id_padre) VALUES ("BBQ gourmet", 10.50, 4);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Bacon crispy gourmet", 11.20, 4);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Carbonara cebolla", 10.05, 4);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Ibérica", 12.00, 4);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Carnivora grourmet", 11.85, 4);
INSERT INTO Menu (item, precio, id_padre) VALUES ("BBQ Grill", 10.95, 4);

INSERT INTO Menu (item, precio, id_padre) VALUES ("De la huerta", 13.00, 5);
INSERT INTO Menu (item, precio, id_padre) VALUES ("4 quesos", 13.00, 5);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Carbonara", 12.50, 5);
INSERT INTO Menu (item, precio, id_padre) VALUES ("BBQ", 12.40, 5);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Caprichosa", 12.50, 5);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Proscuito", 11.95, 5);

INSERT INTO Menu (item, precio, id_padre) VALUES ("Patatas a gajos", 2.00, 6);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Pops de pollo", 2.50, 6);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Fingers de queso", 2.95, 6);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Pan de ajo", 2.00, 6);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Aros de cebolla", 2.30, 6);
INSERT INTO Menu (item, precio, id_padre) VALUES ("Croquetas", 2.50, 6);
use pizza_ilerna;
SELECT id, id_padre from menu where id_padre = 1;
select * from menu;

