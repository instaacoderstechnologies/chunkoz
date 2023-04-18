<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chunkos Landing</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="front/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;600;700&family=Montserrat:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light  navbar-fixed" id="navbar">
    <div class="container-xxl">
      <a class="navbar-brand" href="">
        <img src="front/image/logo-white.png" alt="" class="img-fluid">
      </a>
      <div class="navbar-collapse justify-content-md-end loggedIn" id="megaMenu">
        <div class="user">
          <span class="d-flex align-items-center profImg">
            <!-- <img src="front/image/profile.png" alt="" class="img-fluid"> -->
            <span class="pro_img"></span>
             <span class="user_name"></span>
          </span>
        </div>
        <a onclick="logOut()" class="btn btn-primary btn-getquote">
          Log Out
        </a>
      </div>
    </div>
  </nav>
  <style>
      .btn-getquote{display:none}
  </style>

  <script>
      $(document).ready(function(){
        var uname = window.localStorage.getItem('userName');
        var userAvtar = window.localStorage.getItem('userAvtar');
        if(uname){
            $('.user_name').html('Hi, '+uname);
            $('.btn-getquote').show();
        }

        if(userAvtar){
            $('.pro_img').html(`<img src="front/image/`+userAvtar+`.png" alt="" class="img-fluid">`);
        }

      });

      function logOut(){
          window.localStorage.removeItem('userName');
          window.location.href = '/';
      }

  </script>