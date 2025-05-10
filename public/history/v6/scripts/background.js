

const backgroundVideo = document.getElementById("backgroundVideo")
const backgroundVideoSource = document.getElementById("backgroundVideoSource")
const backgroundNum = Math.round(Math.random() * 7)

backgroundVideoSource.src = `images/background${backgroundNum}.mp4`
backgroundVideo.load()