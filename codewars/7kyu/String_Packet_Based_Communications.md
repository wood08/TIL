String Packet Based Communications(javascript)
===============

link: [String Packet Based Communications](http://www.codewars.com/kata/string-packet-based-communications?utm_source=newsletter)

문제
--
We need you to implement a method of receiving commands over a network, processing the information and responding.  
  
Our device will send a single packet to you containing data and an instruction which you must perform before returning your reply.  
  
To keep things simple, we will be passing a single "packet" as a string. Each "byte" contained in the packet is represented by 4 chars.  
  
One packet is structured as below:

<pre>
Header  Instruction   Data1    Data2   Footer
------   ------       ------   ------  ------
 H1H1     0F12         0012     0008    F4F4
------   ------       ------   ------  ------

The string received in this case would be - "H1H10F1200120008F4F4"

Instruction: The calculation you should perform, always one of the below.
            0F12 = Addition
            B7A2 = Subtraction
            C3D9 = Multiplication
            FFFF = This instruction code should be used to identify your return value.
The Header and Footer are unique identifiers which you must use to form your reply.
</pre>

Data1 and Data2 are the decimal representation of the data you should apply your instruction to. i.e 0109 = 109.  

Your response must include the received header/footer, a "FFFF" instruction code, and the result of your calculation stored in Data1.  

Data2 should be zero'd out to "0000".  

<pre>
To give a complete example:

If you receive message "H1H10F1200120008F4F4".
The correct response would be "H1H1FFFF00200000F4F4"
</pre>

In the event that your calculation produces a negative result, the value returned should be "0000", similarily if the value is above 9999 you should return "9999".  
  
Goodluck, I look forward to reading your creative solutions!  

답변
--
<pre>
function communicationModule(packet)
{  
  var arr = [];
  arr[0] = packet.substr(0,4);
  arr[1] = packet.substr(4,4);
  arr[2] = Number(packet.substr(8,4));
  arr[3] = Number(packet.substr(12,4));
  arr[4] = packet.substr(16,4);

  var result = 0;
  switch(arr[1]){
    case '0F12':
      result = arr[2] + arr[3];
    break;
    case 'B7A2':
      result = arr[2] - arr[3];
    break;
    case 'C3D9':
      result = arr[2] * arr[3];
    break;
  }
  
  if(result<0) result = 0;
  if(result>9999) result = 9999;
  
  result = result.toString().length < 4 ? new Array(4 - result.toString().length + 1).join('0') + result : result;
  
  return arr[0]+'FFFF'+result+'0000'+arr[4];
}
// Time: 726ms
</pre>

다른 사람들의 답변
------------
<pre>
function communicationModule(packet) {

  let [ header, inst, data1, data2, footer ] = packet.match(/.{4}/g);

  let ops = {
    '0F12': (a, b) => a + b,
    'B7A2': (a, b) => a - b,
    'C3D9': (a, b) => a * b
  };

  let res = ops[inst](+data1, +data2);

  if (res < 0)
    res = 0;
  else if (res > 9999)
    res = 9999;

  return `${header}FFFF${`000${res}`.slice(-4)}0000${footer}`;

}
</pre>

<pre>
function communicationModule(packet)
{
  let hdr = packet.substr(0, 4);
  let cmd = packet.substr(4, 4);
  let data1 = +packet.substr(8, 4);
  let data2 = +packet.substr(12, 4);
  let ftr = packet.substr(16, 4);
  
  let result = '0000';
  
  switch (cmd) {
    case '0F12': result = data1 + data2; break;
    case 'B7A2': result = data1 - data2; break;
    case 'C3D9': result = data1 * data2; break;
  }
  
  if (result < 0) result = 0;
  if (result > 9999) result = 9999;
  result = ('0000' + result).slice(-4);
  
  return hdr + 'FFFF' + result + '0000' + ftr;
}
</pre>


생각할 점
------------------------
1. 문자를 배열로 만드는데 참 맘에 안든다. 나처럼 막 자른 사람도 있고, 정규식 쓴 사람도 있고...
2. 결과값에 0 채울때도 맘에 안듬. 이것도 정규식 쓴사람 이나 숫자자릿수 채우고 문자자른 사람도 있음.
3. 7kyu 라서 몇 줄 안나올줄 알았는데 생각외로 길게 나왔다.