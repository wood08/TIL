Offload your work!(javascript)
===============

link: [Offload your work!](http://www.codewars.com/kata/offload-your-work/train/javascript)

문제
--
You are the best freelancer in the city. Everybody knows you, but what they don't know, is that you are actually offloading your work to other freelancers and and you rarely need to do any work. You're living the life!  

To make this process easier you need to write a method called workNeeded to figure out how much time you need to contribute to a project.  

Giving the amount of time in minutes needed to complete the project and an array of pair values representing other freelancers' time in [Hours, Minutes] format ie. [[2, 33], [3, 44]] calculate how much time you will need to contribute to the project (if at all) and return a string depending on the case.  

<pre>
If we need to contribute time to the project then return "I need to work x hour(s) and y minute(s)"
If we don't have to contribute any time to the project then return "Easy Money!"
</pre>


답변
--
<pre>
function workNeeded(projectMinutes, freelancers)
{
  var workTime = 0;
  for(var i=0; i<freelancers.length; i++){
    workTime += freelancers[i][0] * 60;
    workTime += freelancers[i][1];
  }
  
  if( workTime >= projectMinutes ){
    return "Easy Money!";
  } else {
    workTime = projectMinutes - workTime;
    return "I need to work "+Math.floor(workTime/60)+" hour(s) and "+(workTime%60)+" minute(s)";
  }
}
// Time: 612ms
</pre>

다른 사람들의 답변
------------
<pre>
const workNeeded = (p, f) => (p = f.reduce((s,[h,m])=> s - h*60- m,p)) <= 0  ? 
                "Easy Money!" :
                `I need to work ${p/60|0} hour(s) and ${p%60} minute(s)`;
</pre>

<pre>
function workNeeded(project_minutes, freelancers)
{
  var i;
  for (i=0; i<freelancers.length; i+=1)
    project_minutes -= (freelancers[i][0]*60 + freelancers[i][1]);
  return project_minutes <= 0 ? "Easy Money!" : ("I need to work " + Math.floor(project_minutes/60)
    + " hour(s) and " + String(project_minutes%60) + " minute(s)");
}
</pre>


생각할 점
------------------------
1. 올만에 하느라 넘나 귀찮았음.
2. 다른 사람들 답변 보는데 머리 터지겠다. 이게 다 날씨가 더운 탓이다.