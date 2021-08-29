select c.first_name ,c.last_name ,count(r.rental_id) from customer c ,rental r
where c.customer_id =  r.customer_id and year(r.rental_date) = 2005
group by c.customer_id
order by count(r.rental_id) DESC
limit 3;