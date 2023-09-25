<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
      
        <div class="form-section">
            <div class="hero"><img src="https://media.istockphoto.com/id/1313809152/id/vektor/ikon-stan-makanan-supermarket-dan-pusat-perbelanjaan-terkait-vektor.jpg?s=2048x2048&w=is&k=20&c=Le1kCLpA62DQ_piFeFiVJtdPE08NGFbsYgUZexrOrHo=" alt="user img"></div>
            <form method="post" onsubmit="submitForm(event)">
                <div class="input-box">
                     <label for="usernameInput">Username <p class="none">*Masukkan Username!</p></label>
                     <input type="text" name="username" id="usernameInput" placeholder="Username">
                </div>
                <div class="input-box">
                     <label for="passwordInput">Password  <p class="none">*Masukkan Password!</p></label>
                     <input type="password" name="password" id="passwordInput" placeholder="Password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>

    </div>
    <script>
        function submitForm(event) {
            // Hentikan pengiriman formulir ke URL default
            event.preventDefault();

            const username = document.querySelector("input[name='username']");
            const password = document.querySelector("input[name='password']");
            const button =  document.querySelector("button");
            const p = document.querySelectorAll("p")

        
                if(username.value == '' && password.value == ''){
                    p.forEach((value) => {
                        value.classList.remove("none")
                    })
                    p.forEach((value) => {
                        value.classList.add("on");
                    })
                }else if(username.value !== '' && password.value !== ''){
                    p.forEach((value) => {
                        value.classList.add("none");
                    })
                    if(username.value == 'lutfiAgisna' && password.value == '08'){
                        // Simpan URL dari halaman tujuan setelah submit
                        var targetURL = 'home/index.php';
                        // Arahkan ke halaman tujuan setelah submit
                        window.location.href = targetURL;
                    }else{
                        alert("Username atau Password Salah!");
                    }
                }else if(username.value == '' && password.value !== ''){
                    p[0].classList.remove("none");
                    p[0].classList.add("on")

                    p[1].classList.remove("on");
                    p[1].classList.add("none");
                }else if(username.value !== '' && password.value == ''){
                    p[1].classList.remove('none');
                    p[1].classList.add('on');

                    p[0].classList.remove('on');
                    p[0].classList.add('none');
                }
          
        }
       
    </script>
</body>
</html>