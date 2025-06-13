
const container = document.getElementById('emoji-container');
const emojis = ["🚀", "🌐", "❤️‍🔥", "💫"];

function createRain() {
    container.innerHTML = ''; // Vider les emojis précédents
    const rainAmount = 1000;

    for (let i = 0; i < rainAmount; i++) {
        const emoji = document.createElement('div');
        emoji.classList.add('emoji');
        emoji.textContent = emojis[Math.floor(Math.random() * emojis.length)];

        // Position horizontale aléatoire
        emoji.style.left = `${Math.random() * 100}%`;

        // Délai de départ aléatoire
        emoji.style.animationDelay = `${Math.random() * 1}s`;

        // Durée de chute variable
        emoji.style.animationDuration = `${0.5 + Math.random() * 2}s`;

        container.appendChild(emoji);
    }
}