CREATE DATABASE sparta
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;

USE sparta;

CREATE TABLE news (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  title CHAR(128) NOT NULL,
  news_context TEXT NOT NULL,
  image CHAR(128),
  date DATETIME
);

CREATE TABLE news_archive (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  title CHAR(128) NOT NULL,
  news_context TEXT NOT NULL,
  image CHAR(128),
  date DATETIME
);

CREATE TABLE reviews (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  email CHAR(64) NOT NULL,
  name CHAR(64) NOT NULL,
  review__context TEXT NOT NULL,
  avatar CHAR(128)
);

CREATE TABLE fitness_reviews (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  email CHAR(64) NOT NULL,
  name CHAR(64) NOT NULL,
  review__context TEXT NOT NULL,
  avatar CHAR(128)
);

CREATE TABLE schedule (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  title CHAR(128) NOT NULL,
  instructor CHAR(64) NOT NULL,
  timing CHAR(64) NOT NULL,
  branch CHAR(64) NOT NULL,
  week_day CHAR(64) NOT NULL,
  number INT(1) NOT NULL
);

CREATE TABLE fitness_schedule (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  title CHAR(128) NOT NULL,
  instructor CHAR(64) NOT NULL,
  timing CHAR(64) NOT NULL,
  branch CHAR(64) NOT NULL,
  week_day CHAR(64) NOT NULL,
  number INT(1) NOT NULL
);

CREATE TABLE instructors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  created_at DATETIME DEFAULT NOW() NOT NULL,
  email CHAR(64) NOT NULL,
  name CHAR(64) NOT NULL,
  phone CHAR(14),
  branch CHAR(64),
  specification CHAR(64)
);
