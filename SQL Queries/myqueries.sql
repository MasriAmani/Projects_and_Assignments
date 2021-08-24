SELECT dname,dyear,earned_from  FROM `degrees` WHERE 1;

SELECT i.first_name from instructors i , degrees d where d.dname = "MS in Computer Science "  and i.id = d.instructor_id;

DELETE instructors , degrees from instructors INNER JOIN degrees ON instructors.id =degrees.instructor_id WHERE 1;

--Inserting instructor Sami Haddad that have 2 degrees "MS in Computer Science 2017 from AUB"
--and "BS in Business 2014 from LAU"

INSERT INTO `instructors` (`first_name`,`last_name`) VALUES ('Sami', "Haddad" );
SET @id = LAST_INSERT_ID();
INSERT INTO `degrees` (`dname`,`dyear`, `earned_from`,`instructor_id`) VALUES ('MS in Computer Science ','2017','AUB', @id);
INSERT INTO `degrees` (`dname`,`dyear`, `earned_from`,`instructor_id`) VALUES ('BS in Business','2014','LAU', @id);