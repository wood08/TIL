String Reordering(javascript)
===============

link: [String Reordering](https://www.codewars.com/kata/string-reordering/train/javascript)

문제
--
The input will be an array of dictionaries.  

Return the values as a string-seperated sentence in the order of their keys' integer equivalent (increasing order).  

The keys are not reoccurring and their range is -999 < key < 999. The dictionaries' keys & values will always be strings and will always not be empty.  

Example  
<pre>
Input:
List = [
        {'4': 'dog' }, {'2': 'took'}, {'3': 'his'},
        {'-2': 'Vatsan'}, {'5': 'for'}, {'6': 'a'}, {'12': 'spin'}
       ]

Output:
'Vatsan took his dog for a spin'
</pre>

답변
--
<pre>
function sentence(List) {
  // your code
  List.sort(function(obj1, obj2){  
    return Object.keys(obj1)-Object.keys(obj2);
  });
  return List.map(x=>x[Object.keys(x)]).join(" ");
}
// Time: 705ms
</pre>

다른 사람들의 답변
------------
<pre>
function sentence(a) {
  return a.sort((a,b)=>Object.keys(a)-Object.keys(b)).map(x=>x[+Object.keys(x)]).join` `
}
</pre>

<pre>
const firstKey = obj => Object.keys(obj)[0];
const firstValue = obj => Object.values(obj)[0];

const sentence = list => 
  list.sort((a, b) => firstKey(a) - firstKey(b)).map(el => firstValue(el)).join(' ');
</pre>

<pre>
function sentence(list) {
  let key = obj => +Object.keys(obj)
  return list.sort((a,b) => key(a) - key(b)).map(e => Object.values(e)[0]).join(' ')
}
</pre>

생각할 점
------------------------
1. 데이터가 json 이라서 그런가 엄청 지저분해보인다. 저게 최선인가? 싶으면서 제출했는데 다른사람들 답변 보니 뭐 비슷한 듯
