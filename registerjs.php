<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<div class="container">
  <h1>SignUp</h1>
  <div class="row">
    <form name="myForm">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="password1">Password</label>
        <input type="password" class="form-control" id="password1">
      </div>
      <div class="form-group">
        <label for="password1">Password confirmation</label>
        <input type="password" class="form-control" id="password2">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Accepter les mentions légales</label>
      </div>
      <button type="button" class="btn btn-primary" id="signUp" onclick="validateForm()">Créer un compte</button>
    </form>
    <div id="reponse">
      

    </div>
  </div> 
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
<script>

function validateForm() {
  let email = document.forms["myForm"]["email"].value;
  let password1 = document.forms["myForm"]["password1"].value;
  let password2 = document.forms["myForm"]["password2"].value;



  function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return emailOK = re.test(String(email).toLowerCase());
  }
  validateEmail(email);



  function validatePassword(password){
    $("#password1").each(function () {
        var validated =  true;
        if(this.value.length < 9)  // Contenir au moins 9 caractères
            validated = false;
        if(!/\d/.test(this.value))  // contiennent au moins 1 caractère de base (A-z)
            validated = false;
        if(!/[a-z]/.test(this.value))  // contiennent au moins 1 caractère de base (A-z)
            validated = false;
        if(!/[A-Z]/.test(this.value))  // contiennent au moins un caractère majuscule (A-Z)
            validated = false;
        if(/[^0-9a-zA-Z]/.test(this.value))  // contient seulement 0-9a-zA-Z
            validated = false;
        $('#reponse').text(validated ? "format de password ok" : "format de password non conforme");
    });
  }
  validatePassword(password1);



    if(password1 === password2){
      if (email == "") {
          alert("rentre au moins un début d'email avare de lettre!");
          return false;
      }else if(emailOK){
        alert('ok');
      }else{
        alert('le mot passe ou l\'adresse email est incorrect');
      }
    }else{

    }


  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("reponse").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "register.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="email+'&password='+password1);
    
  }

</script>




</html>