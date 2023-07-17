<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather&family=Nunito+Sans:ital,wght@0,600;1,600&display=swap');
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            outline: none;
            font-family: 'Merriweather';
        }
        body {
            background-color: #080710;
        }
        .form_controll {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .cl {
            width: 250px;
            height: 250px;
            background: linear-gradient(#4141e2, #8a66d6);
            border-radius: 50%;
            position: absolute;
            top: 63%;
            left: 53%;
        }
        .form {
            width: 25%;
            display: block;
            color: #fff;
            background-color: rgba(255,255,255,0.13);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 40px rgba(8,7,16,0.6);
            z-index: 1;
        }
        .form::before {
            content: "";
            width: 150px;
            height: 150px;
            background: linear-gradient(#8a66d6, #4141e2 );
            filter: blur(0.5px);
            position: absolute;
            margin-left: -90px;
            margin-top: -45px;
            border-radius: 50%;
            z-index: -1;
        }
        .title {
            text-align: center;
            margin: 15% 0 7% 0;
        }
        .input {
            width: 80%;
            margin: 3% 10% 10% 10%;
            height: 55px;
            color: #fff;
            background-color: #2e2121d3;
            border: 1px solid #2e2121d3;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 400;
            background-color: rgba(255,255,255,0.07);
            padding: 0 10px;
            font-family: 'Josefin Sans';
        }
        .error {
            border: 1px solid red;
        }
        .ex {
            border: 1px solid green;
        }
        ::placeholder{
            color: #e5e5e5;
        }
        .bot {
            margin-bottom: 5%;
        }
        .form > label {
            font-size: 20px;
            margin-left: 10%;
        }
        .btn {
            width: 80%;
            margin: 10%;
            margin-bottom: 20%;
            margin-top: 7%;
            padding: 15px 45px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 10px;
            border: 2px solid #fff;
            cursor: pointer;
        }
        .btn:hover {
            border: 2px solid #000;
        }
        @media (max-width: 1230px) {
            .cl {
                width: 200px;
                height: 200px;
            }
            .form {
                width: 30%;
            }
        }
        @media (max-width: 1030px) {
            .cl {
                top: 67%;
            }
            .form::before {
                width: 130px;
                height: 130px;
            }
        }
        @media (max-width: 950px) {
            .cl {
                top: 67%;
            }
            .form {
                width: 35%;
            }
        }
        @media (max-width: 850px) {
            .input {
                height: 45px;
            }
        }
        @media (max-width: 730px) {
            .cl {
                top: 63%;
                left: 53%;
            }
            .form {
                width: 40%;
            }
            .form::before {
                margin-left: -80px;
            }
        }
        @media (max-width: 640px) {
            .form {
                width: 45%;
            }
            .form::before {
                width: 120px;
                height: 120px;
                margin-left: -70px;
            }
        }
        @media (max-width: 560px) {
            .cl {
                width: 180px;
                height: 180px;
                top: 67%;
                left: 57%;
            }
            .form {
                width: 55%;
            }
            .form::before {
                width: 130px;
                height: 130px;
                margin-left: -70px;
            }
        }
        @media (max-width: 480px) {
            .cl {
                width: 170px;
                height: 170px;
            }
            .form::before {
                width: 110px;
                height: 110px;
                margin-left: -70px;
                margin-top: -40px;
            }
        }
        @media (max-width: 430px) {
            .cl {
                width: 160px;
                height: 160px;
            }
            .form {
                width: 60%;
            }
        }
        @media (max-width: 350px) {
            .cl {
                width: 160px;
                height: 160px;
            }
            .form {
                width: 60%;
            }
            .cl {
                width: 150px;
                height: 150px;
                top: 67%;
                left: 57%;
            }
            .form {
                width: 70%;
            }
            .input {
                width: 90%;
                margin: 3% 5% 10% 5%;
                height: 50px;
            }
            .form::before {
                width: 100px;
                height: 100px;
                margin-left: -50px;
            }
            .btn {
                width: 90%;
                margin: 10% 5%;
                margin-bottom: 20%;
                margin-top: 7%;
            }
        }
    </style>
</head>
<body>
    <div class="cl"></div>
    <div class="form_controll">
        <form method="POST" action="{{ route('login') }}" class="form" onsubmit="return T()">
            @csrf
            <h1 class="title">Log in</h1>
            <label for="input1">Email</label>
            <input type="email" name="email" id="input1" class="input" placeholder="Enter your email">
            <label for="input2">Password</label>
            <input type="password" name="password" id="input2" class="input bot" placeholder="Enter your password">
            <button class="btn">Ok</button>
        </form>
    </div>
    <script>
        var form = document.querySelector('.form')
        var txt = /@/
        var psw = /^[0-9]{4,4}$/
        var input1 = document.querySelector('#input1')
        var input2 = document.querySelector('#input2')
        function T() {
            if (inpu.value == "" && input.value == "") {
                alert("The email address and password is empty")
                return false
            } else if (inpu.value == "") {
                alert("The email address is empty")
                return false;
            } else if (input.value == "") {
                alert("The password is empty")
                return false
            }
        }
        function Test1() {
            var inputt = document.getElementById('input1').value
            if (inputt == "") {
                input1.setAttribute('class', "input")
            }
            else if (txt.test(inputt)) {
                input1.classList.add('ex')
                input1.classList.remove('error')
            } else {
                input1.classList.add('error')
                input1.classList.remove('ex')
            }
        }
        function Test2() {
            var inputt = document.getElementById('input2').value
            if (inputt == "") {
                input2.setAttribute('class', "input bot")
            }
            else if (psw.test(inputt)) {
                input2.classList.add('ex')
                input2.classList.remove('error')
            } else {
                input2.classList.add('error')
                input2.classList.remove('ex')
            }
        }
        input1.addEventListener("input", Test1)
        input2.addEventListener("input", Test2)
    </script>
</body>
</html>