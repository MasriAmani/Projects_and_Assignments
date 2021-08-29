select a.first_name ,a.last_name ,f.title,f.release_year 
from actor a ,film f, film_actor fc 
where a.actor_id = fc.actor_id and f.film_id = fc.film_id and (f.description like "%crorcodile%" or f.description like "%shark%")
order by a.last_name;