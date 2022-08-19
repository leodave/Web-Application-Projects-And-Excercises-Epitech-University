select count(movies.id) AS "Number of movies that starts with 'eX'" from movies where BINARY title like 'eX%';
