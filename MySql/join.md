join
=============
![sql_join](img/sql_join.png)

inner join
-----------
조건이 일치하는 결과만 출력(교집합)

select *
from table1
inner join table2
on table1.key = table2.key;


outer join
-----------
조건이 일치하는 한쪽의 데이터를 전부 가져옴
left join, right join, full join

