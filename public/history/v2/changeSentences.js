const description = document.getElementById('description');
const changeInterval = 1000;
const ITsentences = [
    "Program or be programmed.",
    "Simplicity is the soul of efficiency.",
    "Hello, World!",
    "Eat, Sleep, Code, Repeat.",
    "In code I trust.",
    "Keep calm and code on.",
    "There are 10 types of people in the world: Those who understand binary and those who don't.",
    "Open source is not just about sharing code, it's about sharing knowledge and empowering communities.",
    "Code never lies, comments sometimes do.",
    "Programming is the future we're building.",
    "Linux is not just an operating system, it's a philosophy.",
    "Code better every day, be better every day.",
    "Coding is my superpower.",
    "The best error message is the one that never appears.",
    "Code is the poetry of a developer.",
    "The future belongs to those who code.",
    "Debugging is like being the detective in a crime movie where you are also the murderer.",
    "Coding is not just about solving problems, it's about creating possibilities.",
    "Programmers don't byte, they nibble a bit.",
    "Coding is the art of thinking clearly, step by step.",
    "Code is like humor, not everyone gets it.",
    "Real programmers count from 0.",
    "Coding is the closest thing we have to a superpower.",
    "The best code is the one that never needs to be written.",
    "Coding is the language of the future, and we're all its poets.",
    "With great code comes great responsibility.",
    "Programmers make the impossible possible.",
    "Coding is not just a job, it's a way of life.",
    "In a world full of bugs, I'm a debugger.",
    "Coding is the ultimate form of self-expression.",
    "Programmers see the world in binary.",
    "Coding is the key to unlocking endless possibilities.",
    "Nothing is impossible when you are a programmer !",
    "Be "
];

let interval;

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

function changeSentence(sentence, place, sentences) {
  clearInterval(interval);
  place.innerText = sentence;
  let rand = getRandomInt(sentences.length);
  let intervalDelay = sentence.length * 100;
  interval = setInterval(changeSentence, intervalDelay, sentences[rand], place, sentences);
}

changeSentence("Keep calm and code on.", description, ITsentences);
