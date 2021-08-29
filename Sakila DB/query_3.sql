select co.country ,count(co.country)
from country co ,city c ,address a, customer cu
where cu.address_id = a.address_id and a.city_id = c.city_id and c.country_id = co.country_id 
GROUP by co.country 
order by count( co.country) desc 
limit 3;