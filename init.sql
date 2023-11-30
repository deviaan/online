CREATE TABLE authors (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    name VARCHAR(128) NOT NULL,
    INDEX (name)
);

CREATE TABLE tags (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    name VARCHAR(128) NOT NULL,
    INDEX (name)
);

CREATE TABLE posts (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
    title VARCHAR(128) NOT NULL,
    date DATE NOT NULL,
    post BLOB NOT NULL,
    author_id SMALLINT UNSIGNED NOT NULL,
    CONSTRAINT `fk_author_id`
           FOREIGN KEY (author_id) REFERENCES authors (id)
           ON DELETE CASCADE
           ON UPDATE RESTRICT
);

CREATE TABLE post_tags (
    post_id INT UNSIGNED NOT NULL,
    tag_id SMALLINT UNSIGNED NOT NULL,
    CONSTRAINT `fk_post_id`
           FOREIGN KEY (post_id) REFERENCES posts (id)
           ON DELETE CASCADE
           ON UPDATE RESTRICT,
    CONSTRAINT `fk_tag_id`
           FOREIGN KEY (tag_id) REFERENCES tags (id)
           ON DELETE CASCADE
           ON UPDATE RESTRICT
);