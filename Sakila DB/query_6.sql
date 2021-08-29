select c.name ,count(f.film_id) as co
from category c ,film f , film_category fc
where c.category_id = fc.category_id and f.film_id = fc.film_id
group by c.name
HAVING  (co>=55 and co<=65)
        or
        (not exists (select c.name ,count(f.film_id) as co
        from category c ,film f , film_category fc
        where c.category_id = fc.category_id and f.film_id = fc.film_id
        group by c.name
        HAVING (co>=55 and co<=65))
		and 
        co in 
		 (select max(a.co) from 
           (select count(f.film_id) as co from category c ,film f , film_category fc
            where c.category_id = fc.category_id and f.film_id = fc.film_id group by c.name )a
		 )
		)
order by co desc;