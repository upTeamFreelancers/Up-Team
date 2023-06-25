var a = document.querySelector('.a')
var ap = document.querySelector('.ap')
if (ap.textContent == 0) {
    a.classList.remove('hidden')
} else {
    a.classList.add('hidden')
}
