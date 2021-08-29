select sum(p.amount) ,avg(p.amount) ,month(r.rental_date)as month  ,year(r.rental_date) as year ,s.store_id
from payment p , staff s , rental r
where r.staff_id = s.staff_id and p.rental_id = r.rental_id
group by month ,year ,store_id ;