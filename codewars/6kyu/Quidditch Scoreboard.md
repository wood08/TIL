Quidditch Scoreboard(javascript)
===============

link: [Quidditch Scoreboard](https://www.codewars.com/kata/quidditch-scoreboard/train/javascript)

문제
--
Your wizard cousin works at a Quidditch stadium and wants you to write a function that calculates the points for the Quidditch scoreboard!  
  
Story  
Quidditch is a sport with two teams. The teams score goals by throwing the Quaffle through a hoop, each goal is worth 10 points.  
  
The referee also deducts 30 points (- 30 points) from the team who are guilty of carrying out any of these fouls: Blatching, Blurting, Bumphing, Haverstacking, Quaffle-pocking, Stooging  
  
The match is concluded when the Snitch is caught, and catching the Snitch is worth 150 points. Let's say a Quaffle goes through the hoop just seconds after the Snitch is caught, in that case the points of that goal should not end up on the scoreboard seeing as the match is already concluded.  
  
You don't need any prior knowledge of how Quidditch works in order to complete this kata, but if you want to read up on what it is, here's a link: https://en.wikipedia.org/wiki/Quidditch  
  
Task  
You will be given a string with two arguments, the first argument will tell you which teams are playing and the second argument tells you what's happened in the match. Calculate the points and return a string containing the teams final scores, with the team names sorted in the same order as in the first argument.  
  
Examples:  
Given an input of:  
<pre>
quidditchScoreboard("Ilkley vs Yorkshire", "Ilkley: Quaffle goal, Yorkshire: Haverstacking foul, Yorkshire: Caught Snitch")
</pre>
The expected output would be:  
<pre>
"Ilkley: 10, Yorkshire: 120"
</pre>
Separate the team names from their respective points with a colon and separate the two teams with a comma.  
  
Good luck!  

답변
--
<pre>
function quidditchScoreboard(teams, actions) {
  // your code here
  var teams_arr = teams.split(" vs ");
  var score_arr = [0,0];
  var action_arr = actions.split(", ");
  
  for(var i = 0; i < action_arr.length; i++){
    if(action_arr[i].indexOf(teams_arr[0]) != -1){
      score_arr = getScore(score_arr, 0, action_arr[i]);
    } else {
      score_arr = getScore(score_arr, 1, action_arr[i]);
    }
    
    if(action_arr[i].indexOf('Snitch') != -1) break;
  }
  return teams_arr[0]+': '+score_arr[0]+', '+teams_arr[1]+': '+score_arr[1];;
}

function getScore(score_arr, target, action){
  var goal = 10;
  var foul = -30;
  var snitch = 150;
  if(action.indexOf('goal') != -1){
    score_arr[target] += goal;
  }
  if(action.indexOf('foul') != -1){
    score_arr[target] += foul;
  }
  if(action.indexOf('Snitch') != -1){
    score_arr[target] += snitch;
  }
  return score_arr;
};
// Time: 695ms
</pre>

다른 사람들의 답변
------------
<pre>
function quidditchScoreboard(teams, actions) {
  const result = {};
  const GOAL = 10, FOUL = 30, SNITCH_CAUGHT = 150;
  const [ team_1, team_2 ] = teams.split(" vs ");
  
  for (const teamAndAction of actions.split(", ")) {
    const [ team, action ] = teamAndAction.split(": ");
    
    if (result[team] === undefined) {
      result[team] = 0;
    }
    
    if (action.match("goal")) {
      result[team]+=GOAL;
    }
    
    if (action.match("foul")) {
      result[team]-=FOUL;
    }
    
    if (action.match("Snitch")) {
      result[team]+=SNITCH_CAUGHT;
      break;
    }
    
  }
  
  return `${team_1}: ${result[team_1] || 0 }, ${team_2}: ${result[team_2] || 0}`;
}
</pre>

<pre>
function quidditchScoreboard(teams, actions) {
    teams = teams.split(" vs ");
    let scores = teams.reduce((a,b) => (a[b] = 0, a), {});
    actions = actions.split(", ");
    for(let i=0; i<actions.length; i++) {
        let temp = actions[i].split(": ");
        let team = temp[0];
        let action = temp[1].split(" ")[1];
        if(action === 'goal') {
            scores[team] += 10;
        }
        else if(action === 'foul') {
            scores[team] -= 30;
        }
        else {
            scores[team] += 150;
            break;
        }
    }
    return teams.map(e => `${e}: ${scores[e]}`).join(", ");
}
</pre>

<pre>
function quidditchScoreboard(teams, actions) {
  var aryactions = actions.split(', ');
  var teams = teams.split(' vs ');
  var score = {[teams[0]]: 0, [teams[1]]: 0};
  
  for(var i = 0; i < aryactions.length; i++) {
    var action = aryactions[i].split(': ');
    
    if(action[1].indexOf('Quaffle ') !== -1) {
      score[action[0]] = score[action[0]]+10;
    } else if (action[1].indexOf('Snitch') !== -1) {
      score[action[0]] = score[action[0]]+150;
      break;
    } else {
      score[action[0]] = score[action[0]]-30;
    }
  }
  
  return teams[0]+': '+score[teams[0]]+', '+teams[1]+': '+score[teams[1]];
}
</pre>

<pre>
function quidditchScoreboard(teams, actions) {
  var rules = {goal: 10, foul: -30, Snitch: 150}
  var score1 = 0;
  var score2 = 0;

  teams = teams.split(' vs ');
  if(actions.includes('Snitch')) actions = actions.split('Snitch')[0] + 'Snitch';
  actions.split(', ').map(function(action){
    if (action.includes(teams[0])) {
      return score1 += rules[action.replace(/[\w\s]+:\s[\w-]+\s/, '')];
    }
    return score2 += rules[action.replace(/[\w\s]+:\s[\w-]+\s/, '')];
  });

  return `${teams[0]}: ${score1}, ${teams[1]}: ${score2}`;
}
</pre>

생각할 점
------------------------
1. 코드를 좀 더 깔끔하고 이쁘게 할 수 있을꺼 같은데 그게 잘 안된다.
2. 배열관련 함수 응용을 열심히  해봐야 할 듯.
3. 수학적 문제만 아니면 그럭저럭...