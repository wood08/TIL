SQL with Sailor Moon: Thinking about JOINs...(SQL)
===============

link: [SQL with Sailor Moon: Thinking about JOINs...](http://www.codewars.com/kata/5ab7a736edbcfc8e62000007/)

문제
--
Practise some SQL fundamentals by making a simple database on a topic you feel familiar with. Or use mine, populated with a wealth of Sailor Moon trivia.  
  
sailorsenshi schema  
<pre>
id
senshi_name
real_name_jpn
school_id
cat_id
</pre>

cats schema
<pre>
id
name
</pre>

schools schema
<pre>
id
school
</pre>
Return a results table - sailor_senshi, real_name, cat and school - of all characters, containing each character's high school, their civilian name and the cat who introduced them to their magical crime-fighting destiny.  

Keep in mind some senshi were not initiated by a cat guardian and one is not in high school. The field can be left blank if this is the case.  

답변
--
<pre>
--your code here--

select
  senshi_name as sailor_senshi
  , real_name_jpn as real_name
  , name as cat
  , school as school 
from sailorsenshi sa
  left join cats c on sa.cat_id=c.id
  left join schools s on sa.school_id=s.id

// Time: 1034ms
</pre>


생각할 점
------------------------
1. 영어공부...orz