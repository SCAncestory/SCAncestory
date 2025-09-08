CREATE TABLE IF NOT EXISTS "migrations"(
  "id" integer primary key autoincrement not null,
  "migration" varchar not null,
  "batch" integer not null
);
CREATE TABLE IF NOT EXISTS "user"(
  "id" integer primary key autoincrement not null,
  "name" text not null,
  "email" text not null,
  "password" text not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "peerage"(
  "id" integer primary key autoincrement not null,
  "peerage" text not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "person"(
  "id" integer primary key autoincrement not null,
  "name" text not null,
  "CanonLoreId" integer,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "regaliatype"(
  "id" integer primary key autoincrement not null,
  "type" text not null,
  "created_at" datetime,
  "updated_at" datetime
);
CREATE TABLE IF NOT EXISTS "regaliaitem"(
  "id" integer primary key autoincrement not null,
  "Name" text,
  "Description" text,
  "type" integer not null,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("type") references "regaliatype"("id")
);
CREATE TABLE IF NOT EXISTS "history"(
  "id" integer primary key autoincrement not null,
  "item" integer not null,
  "person" integer not null,
  "peerage" integer not null,
  "date" date,
  "notes" text,
  "created_at" datetime,
  "updated_at" datetime,
  foreign key("item") references "regaliaitem"("id"),
  foreign key("person") references "person"("id"),
  foreign key("peerage") references "peerage"("id")
);

INSERT INTO migrations VALUES(4,'2025_09_05_104237_Initial_setup',1);
