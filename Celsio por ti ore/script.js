const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");
const asteroidImages = []; // Array para armazenar as imagens dos asteroides
const asteroidImageNames = ["Asteroids.png", "Asteroids.png", "Asteroids.png"]; // Nomes das imagens

const spacecraftWidth = 50; //nave
const spacecraftHeight = 50;
const spacecraftSpeed = 4;
const asteroidRadius = 20; // asteroid
const asteroidSpeed = 4;
const bulletWidth = 5; // tiro
const bulletHeight = 10;
const bulletSpeed = 10;

let score = 0;
let spacecraftX = canvas.width / 2 - spacecraftWidth / 2;
let spacecraftY = canvas.height - spacecraftHeight - 10;
let leftPressed = false;
let rightPressed = false;
let upPressed = false;
let downPressed = false;
let asteroids = [];

let bullets = [];
let spacePressed = false;

asteroidImageNames.forEach((imageName) => {
    const img = new Image();
    img.src = imageName;
    asteroidImages.push(img);
});

document.addEventListener("keydown", keyDownHandler, false);
document.addEventListener("keyup", keyUpHandler, false);

function keyDownHandler(event) { // movimentação
if (event.key === "Left" || event.key === 'a') {
        leftPressed = true;
    } else if (event.key === "Right" || event.key === "d") {
        rightPressed = true;
    } else if (event.key === "Up" || event.key === "w") {
        upPressed = true;
    } else if (event.key === "Down" || event.key === "s") {
        downPressed = true;
    } else if (event.key === " ") {
        spacePressed = true;
        shootBullet();
    }
}

function keyUpHandler(event) {
if (event.key === "Left" || event.key === 'a') {
        leftPressed = false;
    } else if (event.key === "Right" || event.key === "d") {
        rightPressed = false;
    } else if (event.key === "Up" || event.key === "w") {
        upPressed = false;
    } else if (event.key === "Down" || event.key === "s") {
        downPressed = false;
    } else if (event.key === " ") {
        spacePressed = false;
    }
}

function shootBullet() {
    if (bullets.length < 5) { // tiros na tela ao quando segura no espaço ao mesmo tempo 
        bullets.push({ x: spacecraftX + spacecraftWidth / 2 - bulletWidth / 2, y: spacecraftY });
    }
}

function drawBullets() {  // o tiro
    for (let i = 0; i < bullets.length; i++) {
        ctx.fillStyle = "yellow";
        ctx.fillRect(bullets[i].x, bullets[i].y, bulletWidth, bulletHeight);
    }
}

function moveBullets() {
for (let i = 0; i < bullets.length; i++) {
    bullets[i].y -= bulletSpeed;

    if (bullets[i].y < 0) {
        bullets.splice(i, 1);
        i--;
        }
    }
}

function drawSpacecraft() { // imagem da nave
    const spacecraftImage = new Image();
    spacecraftImage.src = 'nave (2).png'; 
    spacecraftImage.onload = function() {
        ctx.drawImage(spacecraftImage, spacecraftX, spacecraftY, spacecraftWidth, spacecraftHeight);
    };
}

function drawAsteroids() { // imagem de asteroide da lista
    for (let i = 0; i < asteroids.length; i++) {
        const asteroidImage = asteroidImages[i % asteroidImages.length]; 
        ctx.drawImage(asteroidImage, asteroids[i].x, asteroids[i].y, asteroidRadius * 2, asteroidRadius * 2);
    }
}

function checkBulletAsteroidCollision() { // colisao 
for (let i = 0; i < bullets.length; i++) {
    for (let j = 0; j < asteroids.length; j++) {
        if (
            bullets[i].x < asteroids[j].x + asteroidRadius * 2 &&
            bullets[i].x + bulletWidth > asteroids[j].x &&
            bullets[i].y < asteroids[j].y + asteroidRadius * 2 &&
            bullets[i].y + bulletHeight > asteroids[j].y
            ) {
            bullets.splice(i, 1);
            i--;
            asteroids.splice(j, 1);
            score++; // Adicione pontos por acertar o asteroide
            break;
            }
        }
    }
}

function moveSpacecraft() {
    if (leftPressed && spacecraftX > 0) {
        spacecraftX -= spacecraftSpeed;
    } else if (rightPressed && spacecraftX < canvas.width - spacecraftWidth) {
        spacecraftX += spacecraftSpeed;
}

if (upPressed && spacecraftY > 0) {
        spacecraftY -= spacecraftSpeed;
    } else if (downPressed && spacecraftY < canvas.height - spacecraftHeight) {
        spacecraftY += spacecraftSpeed;
    }
}

function moveAsteroids() {
    for (let i = 0; i < asteroids.length; i++) {
        asteroids[i].y += asteroidSpeed;

        if (asteroids[i].y > canvas.height) {
            asteroids.splice(i, 1);
            i--;
            score++;
        } else if (
            asteroids[i].x < spacecraftX + spacecraftWidth &&
            asteroids[i].x + asteroidRadius * 2 > spacecraftX &&
            asteroids[i].y < spacecraftY + spacecraftHeight &&
            asteroids[i].y + asteroidRadius * 2 > spacecraftY
            ) {
            alert("FIM! Pontuação: " + score);
            document.location.reload();
            clearInterval(gameLoop);
        }
    }
}

function createAsteroids() { // Número de asteroides a criar
    const asteroidCount = 20; 
    for (let i = 0; i < asteroidCount; i++) {
        const x = Math.random() * (canvas.width - asteroidRadius * 2) + asteroidRadius;
        const y = Math.random() * -canvas.height;
        asteroids.push({ x, y });
    }
}

function drawScore() { // Pontuação
    ctx.font = "16px Arial";
    ctx.fillStyle = "white";
    ctx.fillText("Pontuação: " + score, 10, 20);
}

function drawBackground() { // imagem da galaxia
    const backgroundImage = new Image();
        backgroundImage.src = 'galaxy.jpg';
        ctx.drawImage(backgroundImage, 0, 0, canvas.width, canvas.height);
}

function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawBackground(); // imagem de fundo
    drawSpacecraft();
    drawAsteroids();
    drawBullets(); // linha para desenhar os tiros
    drawScore();
    moveSpacecraft();
    moveAsteroids();
    moveBullets(); // linha para mover os tiros
    checkBulletAsteroidCollision(); // verificar colisão entre tiros e asteroides
}

const gameLoop = setInterval(draw, 10);
    setInterval(createAsteroids, 1000);
    