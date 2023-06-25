var c = document.querySelector('.c')
var start = document.querySelector('.start')
var title = document.querySelector('.title')
if (c.textContent == 0) {
    start.classList.remove('hidden')
    title.textContent = "No title"
} else {
    start.classList.add('hidden')
}