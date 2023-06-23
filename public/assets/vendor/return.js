function Tekshirishpro() {
    var a = document.getElementById('input1').value;
    var b = document.getElementById('input2').value;
    var c = document.getElementById('input3').value;
    var d = document.getElementById('image').value;
    // all
    if (a == '' && b == '' && c == '' && d == '') {
        alert('Field is empty')
        return false;
    }
    // three
    else if (a == '' && b == '' && c == '') {
        alert('The name, about, link field is empty')
    }
    else if (a == '' && b == '' && d == '') {
        alert('The name, about, image field is empty')
    }
    else if (a == '' && d == '' && c == '') {
        alert('The name, image, link field is empty')
    }
    else if (d == '' && b == '' && c == '') {
        alert('The image, about, link field is empty')
    }
    // two
    else if (a == '' && b == '') {
        alert('The name, about field is empty')
        return false;
    }
    else if (a == '' && c == '') {
        alert('Thr name, link field is empty')
        return false;
    }
    else if (a == '' && d == '') {
        alert('Thr name, image field is empty')
        return false;
    }
    else if (b == '' && c == '') {
        alert('The about, link field is empty')
        return false;
    }
    else if (b == '' && d == '') {
        alert('The about, image field is empty')
        return false;
    }
    else if (c == '' && d == '') {
        alert('The link, image field is empty')
        return false;
    }
    // one
    else if (a == '') {
        alert('Name null')
        return false;
    }
    else if (b == '') {
        alert('Task null')
        return false;
    }
    else if (c == '') {
        alert('Link null')
        return false;
    }
    else if (d == '') {
        alert('Image null')
        return false;
    }
    else {
        return true;
    }
    return false;
}
function Tekshirishtea() {
    var a = document.getElementById('input1').value;
    var b = document.getElementById('input2').value;
    var c = document.getElementById('image').value;
    // all
    if (a == '' && b == '' && c == '') {
        alert('Field is empty')
        return false;
    }
    // two
    else if (a == '' && b == '') {
        alert('The name, career field is empty')
        return false;
    }
    else if (a == '' && c == '') {
        alert('The name, image field is empty')
        return false;
    }
    else if (b == '' && c == '') {
        alert('The career, image field is empty')
        return false;
    }
    // one
    else if (a == '') {
        alert('The name field is empty')
        return false;
    }
    else if (b == '') {
        alert('The career field is empty')
        return false;
    }
    else if (c == '') {
        alert('The image field is empty')
        return false;
    }
    else {
        return true;
    }
    return false;
}