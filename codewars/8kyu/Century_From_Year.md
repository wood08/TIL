Century From Year(javascript)
===============

link: [Century From Year](http://www.codewars.com/kata/century-from-year/javascript)

문제
--
Introduction  
The first century spans from the year 1 up to and including the year 100, The second - from the year 101 up to and including the year 200, etc.  
  
Task :  
Given a year, return the century it is in.  
  
Input , Output Examples ::
<pre>
centuryFromYear(1705)  returns (18)
centuryFromYear(1900)  returns (19)
centuryFromYear(1601)  returns (17)
centuryFromYear(2000)  returns (20)
</pre>
Hope you enjoy it .. Awaiting for Best Practice Codes  
  
Enjoy Learning !!!

답변
--
<pre>
function century(year) {
  // Finish this :)
  return year % 100 > 0 ? Math.floor(year / 100) + 1 : Math.floor(year / 100);
}
// Time: 633 ms
</pre>

다른 사람들의 답변
------------
<pre>
const century = year => Math.ceil(year/100)
</pre>

<pre>
const century = year => year % 100 === 0 ? parseInt(year / 100) : parseInt(year / 100) + 1;
</pre>

생각할 점
------------------------
1. 버림이 아니라 그냥 올림하면 됐었나???! 싶은 내용.
