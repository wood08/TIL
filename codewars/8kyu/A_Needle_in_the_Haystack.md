A Needle in the Haystack(javascript)
=============
문제
------------

Link: [A Needle in the Haystack](http://www.codewars.com/kata/a-needle-in-the-haystack/javascript)

Can you find the needle in the haystack?

Write a function findNeedle() that takes an array full of junk but containing one "needle"

After your function finds the needle it should return a message (as a string) that says:

"found the needle at position " plus the index it found the needle, so:

Python, Ruby & Elixir
<pre>
find_needle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
</pre>

JavaScript & TypeScript
<pre>
findNeedle(['hay', 'junk', 'hay', 'hay', 'moreJunk', 'needle', 'randomJunk'])
</pre>

Java
<pre>
findNeedle(new Object[] {"hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"})
</pre>

should return
<pre>
"found the needle at position 5"
</pre>

답변
--------------

<pre>
function findNeedle(haystack) {
  // your code here
  return 'found the needle at position '+haystack.indexOf('needle');
}
</pre>


생각할 점
------------------------
1. 문제가 넘 쉬웠다..... 
