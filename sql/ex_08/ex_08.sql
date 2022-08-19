select movies.title, genres.name from movies INNER JOIN genres ON movies.genre_id= genres.id where genres.name = "action" or genres.name = "romance";

