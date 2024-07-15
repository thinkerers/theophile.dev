BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "authors" (
	"id"	INTEGER,
	"name"	TEXT NOT NULL,
	"email"	TEXT UNIQUE,
	"bio"	TEXT,
	"created_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "articles" (
	"id"	INTEGER,
	"title"	TEXT NOT NULL,
	"created_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	"updated_at"	DATETIME,
	"content"	TEXT NOT NULL,
	"author_id"	INTEGER,
	"published"	INTEGER DEFAULT 0 CHECK("published" IN (0, 1)),
	"summary"	TEXT,
	"slug"	TEXT UNIQUE,
	"image"	TEXT,
	FOREIGN KEY("author_id") REFERENCES "authors"("id") ON DELETE SET NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "tags" (
	"id"	INTEGER,
	"name"	TEXT NOT NULL UNIQUE,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "article_tag" (
	"article_id"	INTEGER,
	"tag_id"	INTEGER,
	FOREIGN KEY("tag_id") REFERENCES "tags"("id") ON DELETE CASCADE,
	FOREIGN KEY("article_id") REFERENCES "articles"("id") ON DELETE CASCADE,
	PRIMARY KEY("article_id","tag_id")
);
CREATE TABLE IF NOT EXISTS "comments" (
	"id"	INTEGER,
	"article_id"	INTEGER,
	"author_name"	TEXT,
	"author_email"	TEXT,
	"comment_text"	TEXT NOT NULL,
	"created_at"	DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY("article_id") REFERENCES "articles"("id") ON DELETE CASCADE,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "categories" (
	"id"	INTEGER,
	"name"	TEXT NOT NULL UNIQUE,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "article_category" (
	"article_id"	INTEGER,
	"category_id"	INTEGER,
	FOREIGN KEY("category_id") REFERENCES "categories"("id") ON DELETE CASCADE,
	FOREIGN KEY("article_id") REFERENCES "articles"("id") ON DELETE CASCADE,
	PRIMARY KEY("article_id","category_id")
);
CREATE INDEX IF NOT EXISTS "idx_articles_slug" ON "articles" (
	"slug"
);
CREATE INDEX IF NOT EXISTS "idx_articles_author_id" ON "articles" (
	"author_id"
);
CREATE INDEX IF NOT EXISTS "idx_comments_article_id" ON "comments" (
	"article_id"
);
CREATE INDEX IF NOT EXISTS "idx_article_category_article_id" ON "article_category" (
	"article_id"
);
CREATE INDEX IF NOT EXISTS "idx_article_category_category_id" ON "article_category" (
	"category_id"
);
COMMIT;
