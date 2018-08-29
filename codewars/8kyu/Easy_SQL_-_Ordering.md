Easy SQL - Ordering(SQL)
=============
문제
------------

Link: [Easy SQL - Ordering](http://www.codewars.com/kata/easy-sql-ordering/train/sql)
  
Your task is to sort the information in the provided table 'companies' by number of employees (high to low). Returned table should be in the same format as provided:  
  
companies table schema  
<pre>
id
ceo
motto
employees
</pre>
Solution should use pure SQL. Ruby is only used in test cases.

답변
--------------
<pre>
select id, ceo, motto, employees from companies order by employees desc;
// 1632ms
</pre>


생각할 점
------------------------
1. SQL 문제 있길래 함 해봄.
2. 영어공부..!! ㅠㅠ
