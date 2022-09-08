<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "latihan");

require '../koneksi/function.php';

if( isset($_POST["submit"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil di tambahkan!');
                </script>";
    } else {
        echo mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD.CANDRA</title>

    <link rel="stylesheet" href="../Style/Style.css">
    <link rel="shorcut icon" href="../img/logo.png">
</head>
<body>

    <body class="align">

        <div class="grid">
      
            <h1 style="text-align: center;">REGISTER PAGE</h1>

          <form action="https://httpbin.org/post" method="POST" class="form login">

            <div class="form__field">
                <label for="login__name"><svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg><span class="hidden">Name</span></label>
                <input autocomplete="name" id="name" type="text" name="name" class="form__input" placeholder="Name" required>
              </div>

              <div class="form__field">
                <label for="login__email"><svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg><span class="hidden">Email</span></label>
                <input autocomplete="email" id="email" type="text" name="email" class="form__input" placeholder="E-Mail" required>
              </div>  
      
            <div class="form__field">
              <label for="login__username"><svg class="icon">
                  <use xlink:href="#icon-user"></use>
                </svg><span class="hidden">Username</span></label>
              <input autocomplete="username" id="username" type="text" name="username" class="form__input" placeholder="Username" required>
            </div>
      
            <div class="form__field">
              <label for="login__password"><svg class="icon">
                  <use xlink:href="#icon-lock"></use>
                </svg><span class="hidden">Password</span></label>
              <input id="password" type="password" name="password" class="form__input" placeholder="Password" required>
            </div>
      
            <div class="form__field">
              <input name="submit" type="submit" value="Register">
            </div>
      
          </form>
      
          <p class="text--center">You are a member? <a href="../Login/Index.php">Login now</a> <svg class="icon">
              <use xlink:href="#icon-arrow-right"></use>
            </svg></p>
      
        </div>
      
        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
          <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
            <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
          </symbol>
          <symbol id="icon-lock" viewBox="0 0 1792 1792">
            <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
          </symbol>
          <symbol id="icon-user" viewBox="0 0 1792 1792">
            <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
          </symbol>
          <symbol id="icon-email" viewBox="0 0 1792 1792">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
          </symbol>
        </svg>
      
      </body>
</body>
</html>