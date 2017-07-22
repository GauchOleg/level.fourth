<?php
// Создание базы SQLite
$db = sqlite_open("test.db");
// Создание таблицы
$sql = "CREATE TABLE post(
						post_id INTEGER,
						title TEXT,
						date_created TEXT,
						contents TEXT,
						rating INTEGER
						)";
sqlite_query($sql, $db);
$sql = "CREATE TABLE post_comment(
						post_comment_id INTEGER,
						post_id INTEGER,
						author TEXT,
						content TEXT,
						url TEXT
						)";
sqlite_query($sql, $db);
$sql = "CREATE TABLE current_visitors(
						current_visitors_id INTEGER,
						ip TEXT
						)";
sqlite_query($sql, $db);
sqlite_close($db);
?>