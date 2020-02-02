CREATE TABLE customer
( id         SERIAL       NOT NULL PRIMARY KEY
, first_name VARCHAR(50)  NOT NULL
, last_name  VARCHAR(50)  NOT NULL
, address    VARCHAR(100) NOT NULL
);


CREATE TABLE item
( id            SERIAL       NOT NULL PRIMARY KEY
, name          VARCHAR(100) NOT NULL
, price         FLOAT        NOT NULL
);

CREATE TABLE shopping_cart
{ id            SERIAL      NOT NULL PRIMARY KEY
, item_id       VARCHAR(50) REFERENCES item(id)     
, item_quantity INT         NOT NULL
}

CREATE TABLE order
( id               SERIAL NOT NULL PRIMARY KEY
, customer_id      INT    NOT NULL REFERENCES customer(id)
, item_id          INT    NOT NULL REFERENCES item(item_id)
, order_quantity   INT    NOT NULL 
);
