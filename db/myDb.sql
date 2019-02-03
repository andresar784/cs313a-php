CREATE TABLE "users"(
    "id" INTEGER NOT NULL,
    "name" VARCHAR(255),
    "email" VARCHAR(255),
    "surname" VARCHAR(255),
    "age" INTEGER,
    PRIMARY KEY(id),

);

CREATE TABLE "prices"(
    "id" INTEGER NOT NULL,
    "value" INTEGER,
    "base price" FLOAT;
    PRIMARY KEY (id)

);

CREATE TABLE "places"(
    "id" INTEGER,
    "name" VARCHAR(255),
    PRIMARY KEY (name),

);

CREATE TABLE "ticket"(
	"id" INTEGER NOT NULL,
    PRIMARY KEY (id), 

);