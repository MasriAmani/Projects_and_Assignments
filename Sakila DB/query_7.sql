select first_name, last_name 
from actor 
where first_name in (select first_name from actor where actor_id =8 ) and actor_id <> 8
UNION
SELECT first_name ,last_name 
from customer
where first_name  in (select first_name from actor where actor_id =8 );