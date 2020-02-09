-- ----------------------------------------------- --
-- --------- POPULATE THE CUSTOMER TABLE --------- --
-- ----------------------------------------------- --
INSERT INTO customer (   id
                        , first_name
                        , last_name
                        , address) 
                 VALUES ( 1
                        , 'James'
                        , 'Smith'
                        , '29 Hudson Street Champlin, MN 55316');
INSERT INTO customer (    id
                        , first_name
                        , last_name
                        , phone) 
                 VALUES ( 2
                        , 'David'
                        , 'Johnson'
                        , '7277 Beacon Drive North Royalton, OH 44133');
INSERT INTO customer (    id
                        , first_name
                        , last_name
                        , phone) 
                 VALUES ( 3
                        , 'Christopher'
                        , 'Williams'
                        , '61 River Dr.Mcdonough, GA 30252');
INSERT INTO customer (    id
                        , first_name
                        , last_name
                        , phone) 
                 VALUES ( 4
                        , 'George'
                        , 'Brown'
                        , '769 Meadowbrook St. Orange Park, FL 32065');
INSERT INTO customer (    id
                        , first_name
                        , last_name
                        , phone) 
                 VALUES ( 5
                        , 'Ronald'
                        , 'Jones'
                        , '36 Thomas Ave.Woodstock, GA 30188');


INSERT INTO item ( id
                 , name
                 , price)
              VALUES ( 1
                     , 'Mountain Bike'
                     , 200) ;
INSERT INTO item ( id
                 , name
                 , price)
              VALUES ( 2
                     , 'Road Bike'
                     , 150) ;
INSERT INTO item ( id
                 , name
                 , price)
              VALUES ( 3
                     , 'Bike Lubricant'
                     , 10) ;
INSERT INTO item ( id
                 , name
                 , price)
              VALUES ( 4
                     , 'Bike Tire'
                     , 30) ;
