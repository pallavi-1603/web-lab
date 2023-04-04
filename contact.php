<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us</title>
  <link rel="stylesheet" href="css/section.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/utils.css" />
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
</head>

<body>
  <main>
    <header>
      <a href="" class="logo_container">
        <img src="img/logo.jpg">
      </a>
      <ul class="navigation">
        <li><a href="index.php">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a class="active.php" href="contact.html">CONTACT</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="cart.html"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
      </ul>
    </header>
    <form action="contact.php" method="post">
      <input name="name" type="text" class="feedback-input" placeholder="Name" />
      <input name="email" type="text" class="feedback-input" placeholder="Email" />
      <textarea name="comment" class="feedback-input" placeholder="Comment"></textarea>
      <input type="submit" name="submit" id="submit" value="SUBMIT" />
    </form>
    <footer>
      <p>Copyright &copy; BMSTechKart.com </p>
    </footer>
  </main>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);

    form {
      max-width: 420px;
      margin: auto;
      padding-top: 20px;
    }

    .btn {
      padding: 5px 10px;
      color: black;
      background: var(--main-bg-color);
      border: 2px solid white;
      border-radius: 7px;
      cursor: pointer;
      box-shadow: 0 0px 5px rgb(255, 255, 255);
    }

    #submit {
      font-family: 'Montserrat', Arial, Helvetica, sans-serif;
      width: 100%;
      background: #CC6666;
      height: 35px;
      border-radius: 5px;
      border: 0;
      cursor: pointer;
    }

    .feedback-input {
      color: rebeccapurple;
      font-family: Helvetica, Arial, sans-serif;
      font-weight: 500;
      font-size: 18px;
      border-radius: 5px;
      line-height: 22px;
      background-color: transparent;
      border: 2px solid #CC6666;
      transition: all 0.3s;
      padding: 13px;
      margin-bottom: 15px;
      width: 100%;
      box-sizing: border-box;
      outline: 0;
    }

    .feedback-input:focus {
      border: 2px solid #CC4949;
    }

    textarea {
      height: 150px;
      line-height: 150%;
      resize: vertical;
    }

    .dalo {
      font-family: 'Montserrat', Arial, Helvetica, sans-serif;
      width: 100%;
      background: #CC6666;
      border-radius: 5px;
      border: 0;
      cursor: pointer;
    }

    form.dalo:hover {
      background-color: #CC4949;
    }

    footer {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      width: 100%;
      bottom: 0;
      background-color: rgb(180, 181, 215);
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      height: 5vh;
    }
  </style>
</body>

</html>