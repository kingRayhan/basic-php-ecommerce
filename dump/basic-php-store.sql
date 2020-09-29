-- -------------------------------------------------------------
-- TablePlus 3.9.1(342)
--
-- https://tableplus.com/
--
-- Database: basic-php-store
-- Generation Time: 2020-09-29 18:16:36.4800
-- -------------------------------------------------------------


DROP TABLE IF EXISTS "public"."carts";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS carts_id_seq;

-- Table Definition
CREATE TABLE "public"."carts" (
    "id" int4 NOT NULL DEFAULT nextval('carts_id_seq'::regclass),
    "title" varchar,
    "price" float8,
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS "public"."orders";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS orders_id_seq;

-- Table Definition
CREATE TABLE "public"."orders" (
    "id" int4 NOT NULL DEFAULT nextval('orders_id_seq'::regclass),
    "customer_name" varchar,
    "customer_phone" varchar,
    "customer_address" text,
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS "public"."products";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS product_id_seq;

-- Table Definition
CREATE TABLE "public"."products" (
    "id" int4 NOT NULL DEFAULT nextval('product_id_seq'::regclass),
    "title" varchar,
    "excerpt" varchar,
    "price" float8,
    "body" text,
    "thumbnail" varchar,
    PRIMARY KEY ("id")
);

DROP TABLE IF EXISTS "public"."users";
-- This script only contains the table creation statements and does not fully represent the table in the database. It's still missing: indices, triggers. Do not use it as a backup.

-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS users_id_seq;

-- Table Definition
CREATE TABLE "public"."users" (
    "id" int4 NOT NULL DEFAULT nextval('users_id_seq'::regclass),
    "name" varchar,
    "email" varchar,
    "password" text,
    PRIMARY KEY ("id")
);

INSERT INTO "public"."orders" ("id", "customer_name", "customer_phone", "customer_address") VALUES
('1', 'রিমন খান', '01836980760', 'rfsadfsadfa'),
('2', 'Helen Dorsey', '+1 (559) 153-9384', 'Iste odit ut nisi co'),
('3', 'Rafael Maynard', '+1 (741) 412-6136', 'Culpa quis deserunt'),
('4', 'রিমন খান', '01836980760', 'uttara , sector 10'),
('5', 'Lunea Parks', '+1 (954) 985-5907', 'Natus iure elit eos');

INSERT INTO "public"."products" ("id", "title", "excerpt", "price", "body", "thumbnail") VALUES
('1', 'Eum sit quis aliqua', 'Magna consequat Lau', '528', 'Dolorem voluptate al', NULL),
('2', 'Perferendis est inve', 'Praesentium magnam r', '190', 'Duis odio et in sint', NULL),
('3', 'Voluptatibus est ali', 'Laborum Atque possi', '277', 'Rerum vitae et quo l', NULL),
('9', 'Dolor id accusamus a', 'Est ea omnis error e', '714', 'Voluptas non in sint', 'images/');

INSERT INTO "public"."users" ("id", "name", "email", "password") VALUES
('23', 'hossainAmrin', 'orchie@gmail.com', '05c890f42dd38f39651932932891500d');

