Pong! [Basics](javascript)
===============

link: [Pong! [Basics]](http://www.codewars.com/kata/pong-basics?utm_source=newsletter)

문제
--
Task:  
You must finish the Pong class. It has a constructor which accepts the maximum score a player can get throughout the game, and a method called play. This method determines whether the current player hit the ball or not, i.e. if the paddle is at the sufficient height to hit it back. There're 4 possible outcomes: player successfully hits the ball back, player misses the ball, player misses the ball and his opponent reaches the maximum score winning the game, either player tries to hit a ball despite the game being over. You can see the input and output description in detail below.  
  
"Play" method input:  
ball position - The Y coordinate of the ball  
player position - The Y coordinate of the centre(!) of the current player's paddle  
"Play" method output:  
One of the following strings:  
  
"Player X has hit the ball!" - If the ball "hits" the paddle  
"Player X has missed the ball!" - If the ball is above/below the paddle  
"Player X has won the game!" - If one of the players has reached the maximum score 
"Game Over!" - If the game has ended but either player still hits the ball  
Important notes:  
Players take turns hitting the ball, always starting the game with the Player 1.  
The paddles are 7 pixels in height.  
The ball is 1 pixel in height.  
Example
<pre>
let game = new Pong(2); // Here we say that the score to win is 2
game.play(50, 53)  -> "Player 1 has hit the ball!";     // Player 1 hits the ball
game.play(100, 97) -> "Player 2 has hit the ball!";     // Player 2 hits it back
game.play(0, 4)    -> "Player 1 has missed the ball!";  // Player 1 misses so Player 2 gains a point
game.play(25, 25)  -> "Player 2 has hit the ball!";     // Player 2 hits the ball
game.play(75, 25)  -> "Player 2 has won the game!";     // Player 1 misses again. Having 2 points Player 2 wins, so we return the corresponding string
game.play(50, 50)  -> "Game Over!";                     // Another turn is made even though the game is already over
</pre>

답변
--
<pre>
class Pong {
  constructor(maxScore) {
    this.maxScore = maxScore;
    this.playerCheck = 0;
    this.playerScore = [0,0];
    this.gameOverCheck = 0;
  }
  
  play(ballPos, playerPos) {
    var result = '';
    
    if( this.playerScore[0] < this.maxScore && this.playerScore[1] < this.maxScore){ 
      if(Math.abs(ballPos - playerPos) > 3.5){
        result = 'Player '+(this.playerCheck+1)+' has missed the ball!';
        this.playerScore[this.playerCheck]++;
      } else {
        result = 'Player '+(this.playerCheck+1)+' has hit the ball!';
      }
    }
    
    if(this.gameOverCheck){
      result = 'Game Over!';
    } else {
      if(this.playerScore[0] == this.maxScore){
        result = 'Player 2 has won the game!';
        this.gameOverCheck = 1;
      }
      if(this.playerScore[1] == this.maxScore){
        result = 'Player 1 has won the game!';
        this.gameOverCheck = 1;
      }
    }
    
    this.playerCheck == 0 ? this.playerCheck = 1 : this.playerCheck = 0;
    
    return result;
  }
}
// Time: 667ms
</pre>

다른 사람들의 답변
------------
<pre>
class Pong {
  constructor(maxScore) {
    this.maxScore = maxScore;
    this.score = {"1" : 0, "2":0};
    this.scoreP2 = 0;
    this.paddleHeight = 7/2;
    this.playerTurn = "1";
    this.gameStatus = "inGame";
  }
  
  play(ballPos, playerPos) {
  if (this.gameStatus == "Finish"){ return "Game Over!"};
    var str = "";
    var oppositePlayer = (this.playerTurn == "1") ? "2" : "1";
    if (Math.abs(ballPos - playerPos)> this.paddleHeight){
      str = "Player "+this.playerTurn+" has missed the ball!";
      this.score[oppositePlayer]++;
      if (this.score[oppositePlayer] == this.maxScore){
        str = "Player "+oppositePlayer+" has won the game!";
        this.gameStatus = "Finish";
        
      }
    } else {
      str = "Player "+this.playerTurn+" has hit the ball!";
    }
    
    this.playerTurn = oppositePlayer;
    return str;
  }
}
</pre>
<pre>
class Pong {
  constructor(maxScore) {
    this.maxScore = maxScore;
    this.playerTurn = 0;
    this.scores = [0, 0];
  }
  
  play(ballPos, playerPos) {
    if (this.scores.some(s => s == this.maxScore)) return "Game Over!"
  
    let scoreIndex = (this.playerTurn + 1) % 2,    
      turnMsg = (Math.abs(playerPos - ballPos) > 3) ?
        (++this.scores[scoreIndex] == this.maxScore) ?
          `Player ${scoreIndex + 1} has won the game!` :
          `Player ${this.playerTurn + 1} has missed the ball!` :
        `Player ${this.playerTurn + 1} has hit the ball!`
    
    this.playerTurn = scoreIndex
    return turnMsg
  }
}
</pre>


생각할 점
------------------------
1. 자바스크립트 class 라서 순간 헛 했는데, 적당히 기본으로 제공된 소스 보고 했더니 잘 돼서 다행.