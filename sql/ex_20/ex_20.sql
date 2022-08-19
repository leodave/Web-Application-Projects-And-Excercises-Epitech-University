select count(id) AS "Number of movies",prod_year AS "production year" from movies group by prod_year order by prod_year desc limit 74;;

