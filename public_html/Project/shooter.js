
const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')

canvas.width = innerWidth
canvas.height = innerHeight

const scoreEl = document.querySelector('#scoreEl')
const startGameBtn= document.querySelector('#startGameBtn')
const modalEL= document.querySelector('#modalEL')
const modalScoreEL= document.querySelector('#modalScoreEL')
let score = 0
let scoreToPoints = 0

let projectiles = []
console.log(logged)

/*const player = {

  height: 32,
  width: 32,
  x: canvas.width / 2,
  xVelocity: 0,
  y: canvas.height / 2,
  yVelocity: 0
  
  };

const circle = {

  x: canvas.width / 2,
  y: canvas.height / 2,
  radius: 15,
  xVelocity: 0,
  yVelocity: 0,
  color: "red"
  
  };*/

class Player{
    constructor(x, y, radius, color){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.xVelocity = 0
        this.yVelocity = 0
    }

    draw(){
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }           
    
    update(){
        this.draw()
        this.x = this.x + this.xVelocity
        this.y = this.y + this.yVelocity
        this.xVelocity *= 0.98;// friction
        this.yVelocity *= 0.98;
    }
}

class Enemy{
    constructor(x, y, radius, color, velocity){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.xVelocity = velocity.x
        this.yVelocity = velocity.y
    }

    draw(){
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }           
    
    update(){
        this.draw()
        this.x = this.x + this.xVelocity
        this.y = this.y + this.yVelocity
        //this.xVelocity *= 0.98;// friction
        //this.yVelocity *= 0.98;
    }
}

class Projectile{
    constructor(x,y,radius,color,velocity){
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }

    draw(){
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }     

    update(){
        this.draw();
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}

addEventListener('click', (event) => {
    const angle = Math.atan2(event.clientY - player.y, event.clientX - player.x)
    const velocity = {
        x: Math.cos(angle) * 5,
        y: Math.sin(angle) * 5
    }    
    projectiles.push(new Projectile(
        player.x, player.y, 5, 'red', velocity
    ))
})

 
let player = new Player(canvas.width/2, canvas.height/2, 15, 'blue')
let enemies = []

function init(){
    player = new Player(canvas.width/2, canvas.height/2, 15, 'blue')
    enemies = []
    projectiles = []
    score = 0
}

const controller = {

    left: false,
    right: false,
    up: false,
    down: false,
    keyListener: function (event) {
  
      var key_state = (event.type == "keydown") ? true : false;
  
      switch (event.keyCode) {
  
        case 37:// left key
          controller.left = key_state;
          console.log("left")
          break;
        case 38:// up key
          controller.up = key_state;
          console.log("up")
          break;
        case 39:// right key
          controller.right = key_state;
          console.log("right")
          break;
        case 40:// down key
          controller.down = key_state;
          console.log("down")
          break;
  
      }
  
    }
  
  };       

/*addEventListener('click', () => {
    score+=10
    scoreEl.innerHTML = score
})*/

let points
startGameBtn.addEventListener('click', () => {
    init()
    modalEL.style.display = "none"
    animate()
    spawnEnemies()
    scoreEl.innerHTML = score
    points = setInterval(startPoints, 1000)

})

function playerMovement(){
    if (controller.up) { player.yVelocity -= 0.25; }
    if (controller.left) { player.xVelocity -= 0.25; }
    if (controller.right) { player.xVelocity += 0.25; } 
    if (controller.down) { player.yVelocity += 0.25; }
}

function playerBoundaryCheck(){
    if (player.x - player.radius <= 0) {player.x = player.radius} //left
    if (player.y - player.radius <= 0) {player.y = player.radius} //top 
    if (player.x + player.radius >= canvas.width) {player.x = canvas.width - player.radius} //right
    if (player.y + player.radius >= canvas.height) {player.y = canvas.height - player.radius} //bottom
}

function animate(){
    animationId = requestAnimationFrame(animate)

    projectiles.forEach((projectile) => {
        projectile.update();
    })

    c.fillStyle = 'rgba(0,0,0,0.1)'
    c.fillRect(0, 0, canvas.width, canvas.height); //background

    player_loop()

    enemies.forEach((enemy, index) => {
        enemy.update()

        projectiles.forEach((projectile, projIndex) => {
            const projDist = Math.hypot(projectile.x - enemy.x, projectile.y - enemy.y)
            if (projDist - enemy.radius - projectile.radius < 1){
                setTimeout(() => {
                    enemies.splice(index, 1)
                    projectiles.splice(projIndex, 1)
                }, 0)
                score += 50
                scoreEl.innerHTML = score
            }
        })
        const dist = Math.hypot(player.x - enemy.x, player.y - enemy.y)
        if (dist - enemy.radius - player.radius < 1){
            modalEL.style.display = "flex"
            //send score to database if logged in 
        if (logged){
            $.ajax({
                url: "save_score.php",
                type: "POST",
                contentType: "application/x-www-form-urlencoded",
                data: {
                    score: score
                },
                success: function( data )
                {
                    console.log(data);
                },
                error: function(){
                    console.log("error");
                }
            });
        }
            modalScoreEL.innerHTML = score
            cancelAnimationFrame(animationId)
            clearInterval(points)
        }
    })
}

function startPoints(){
        score+=10
        scoreEl.innerHTML = score
}


const player_loop = function () {

    playerBoundaryCheck() //boundaries
    playerMovement() //checks button presses
    player.update() //draw every frame

    // call update when the browser is ready to draw again
    //window.requestAnimationFrame(loop);
  
  };

function spawnEnemies(){
    setInterval(() => {
        const radius = Math.random() * (30 - 10) + 10
        let x 
        let y
        if (Math.random() < 0.5){
            x = Math.random() < 0.5 ? 0 - radius : canvas.width + radius
            y = Math.random() * canvas.height
        }
        else{
           x = Math.random() * canvas.width
           y = Math.random() < 0.5 ? 0 - radius : canvas.height + radius
        }        
        const color = 'green'
        const angle = Math.atan2(
            player.y - y,
            player.x - x
        )
        const velocity = {
            x: Math.cos(angle),
            y: Math.sin(angle)
        }

        enemies.push(new Enemy(x,y,radius,color,velocity))
    }, 1000)

}  
window.addEventListener("keydown", controller.keyListener)
window.addEventListener("keyup", controller.keyListener);

/*let textarea = document.getElementById('test-target'),
consoleLog = document.getElementById('console-log'),
btnReset = document.getElementById('btn-reset');

function logMessage(message) {
  console.log(message)
}

addEventListener('keydown', (e) => {
  if (!e.repeat)
    logMessage(`Key "${e.key}" pressed  [event: keydown]`);
  else
    logMessage(`Key "${e.key}" repeating  [event: keydown]`);
});

addEventListener('beforeinput', (e) => {
  logMessage(`Key "${e.data}" about to be input  [event: beforeinput]`);
});

addEventListener('input', (e) => {
  logMessage(`Key "${e.data}" input  [event: input]`);
});

addEventListener('keyup', (e) => {
  logMessage(`Key "${e.key}" released  [event: keyup]`);
});*/

//var test
//function endGame(){
//    test = setTimeout(function() {console.log("game over"); score=0; scoreEl.innerHTML = score }, 100)
//}