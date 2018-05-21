
use spr;
DROP TABLE User;
CREATE TABLE User (
    ID int NOT NULL AUTO_INCREMENT,
	Name varchar(100) NOT NULL,
    Email varchar(50) NOT NULL,
    Password varchar(30) NOT NULL,
    Position varchar(50) NOT NULL,
    NIC varchar(10) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO User (Name, Email, Password, Position, NIC)
VALUES ('Buddhima Dahanayake', 'b.v.dahanayake0812@gmail.com', '12345', 'Admin', '952210556V');
DROP TABLE Orders;
Create Table Orders(
	ID int NOT NULL AUTO_INCREMENT,
    customername varchar(50) NOT NULL,
    roomno INT(3) NOT NULL,
    extradetails varchar(50),
    Type varchar(50),
    Time varchar(10),
    PRIMARY KEY (ID)
);
DROP TABLE Rooms;
Create Table Rooms(
	ID int NOT NULL AUTO_INCREMENT,
    roomno INT(3) NOT NULL,
    type Varchar(50) NOT NULL,
    price decimal(10),
    reserved boolean,
    PRIMARY KEY (ID)
);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (1, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (2, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (3, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (4, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (5, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (6, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (7, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (8, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (9, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (10, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (11, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (12, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (13, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (14, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (15, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (16, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (17, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (18, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (19, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (20, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (21, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (22, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (23, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (24, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (25, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (26, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (27, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (28, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (29, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (30, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (31, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (32, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (33, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (34, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (35, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (36, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (37, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (38, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (39, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (40, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (41, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (42, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (43, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (44, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (45, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (46, 'Vista', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (47, 'Supirior', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (48, 'Supirior', 1000, true);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (49, 'Vista', 1000, false);
INSERT INTO Rooms (roomno, type, price, reserved)
VALUES (50, 'Supirior', 1000, true);

DROP TABLE Reservation;
Create Table Reservation(
	ID int NOT NULL AUTO_INCREMENT,
    roomno INT(3) NOT NULL,
    name Varchar(50) NOT NULL,
    nic varchar(10),
    contactno varchar(10),
    checkedind varchar(20),
    checkedint varchar(20),
	checkedoutd varchar(20),
    checkedoutt varchar(20),
    payment decimal(10),
    PRIMARY KEY (ID)
);
DROP TABLE Meal;
Create Table Meal(
	ID int NOT NULL AUTO_INCREMENT,
    Time Varchar(50) NOT NULL,
    Type varchar(100),
    price decimal(10),
    PRIMARY KEY (ID)
);
INSERT INTO Meal (Time, Type, price)
VALUES ('Breakfast', 'Continental Breakfast', 1000);
INSERT INTO Meal (Time, Type, price)
VALUES ('Breakfast', 'American Breakfast', 1000);
INSERT INTO Meal (Time, Type, price)
VALUES ('Breakfast', 'Sri Lankan Breakfast', 1500);

INSERT INTO Meal (Time, Type, price)
VALUES ('Lunch', 'Meditarian', 1750);
INSERT INTO Meal (Time, Type, price)
VALUES ('Lunch', 'Indian', 1750);
INSERT INTO Meal (Time, Type, price)
VALUES ('Lunch', 'Sri Lankan Rice and Curry', 2000);

INSERT INTO Meal (Time, Type, price)
VALUES ('Dinner', 'Continental Dinner', 1000);
INSERT INTO Meal (Time, Type, price)
VALUES ('Dinner', 'American Dinner', 1000);
INSERT INTO Meal (Time, Type, price)
VALUES ('Dinner', 'Sri Lankan Dinner', 1500);

DROP TABLE FoodOrder;
Create Table FoodOrder(
	ID int NOT NULL AUTO_INCREMENT,
    roomno INT(3) NOT NULL,
    time varchar(100),
    meal varchar(100),
    PRIMARY KEY (ID)
);