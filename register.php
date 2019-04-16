<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-color: #f6f7fb; background-size: auto; background-position: center center;">

  <div class="container">


    <div class="mt-5">
      <h2 class="text-center">COMPOSITION 1 - <code>ISO NaN</code>  </h2>
      <h4 class="text-center">
        <a href="#" class="badge badge-info" id="compte_a_rebours">Warning</a>
      </h4>
    </div>
    <!-- Grid row -->
    <div class="mt-5">
      <!-- Default form login -->
<form class="text-center border border-light p-5 z-depth-5" >

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

    <!-- Password -->
    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

    <div class="input-default-wrapper mt-3">

      <span class="input-group-text mb-3" id="input1">Upload</span>

      <input type="file" id="file-with-current" class="input-default-js" name="file">

      <label class="label-for-default-js rounded-right mb-3" for="file-with-current"><span class="span-choose-file">Choose
          file</span>

        <div class="float-right span-browse">Browse</div>

      </label>

    </div>

    <div class="d-flex justify-content-around">
        <div>
            <!-- Remember me -->
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
            </div>
        </div>

        <div>
            <!-- Forgot password -->
            <a href="">Forgot password?</a>
        </div>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4"  type="button" value="Upload" id="but_upload">Sign in</button>

    <!-- Register -->
    <p>Not a member?
        <a href="">Register</a>
    </p>

    <!-- Social login -->
    <p>or sign in with:</p>

    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="light-blue-text mx-2">
        <i class="fab fa-github"></i>
    </a>

</form>
<!-- Default form login -->
      
    </div>

</div>


  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript">
      function compte_a_rebours()
      {
          var compte_a_rebours = document.getElementById("compte_a_rebours");

          var date_actuelle = new Date();
          var date_evenement = new Date(2019,3,16,18,0,0);
          var total_secondes = (date_evenement - date_actuelle) / 1000;

          var prefixe = "Durée : ";
          if (total_secondes < 0)
          {
              prefixe = "Quiz terminé il y a "; // On modifie le préfixe si la différence est négatif
              total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
          }

          if (total_secondes > 0)
          {
              var jours = Math.floor(total_secondes / (60 * 60 * 24));
              var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
              minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
              secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));

              var et = "et";
              var mot_jour = "jours,";
              var mot_heure = "heures,";
              var mot_minute = "minutes,";
              var mot_seconde = "secondes";

              if (jours == 0)
              {
                  jours = '';
                  mot_jour = '';
              }
              else if (jours == 1)
              {
                  mot_jour = "jour,";
              }

              if (heures == 0)
              {
                  heures = '';
                  mot_heure = '';
              }
              else if (heures == 1)
              {
                  mot_heure = "heure,";
              }

              if (minutes == 0)
              {
                  minutes = '';
                  mot_minute = '';
              }
              else if (minutes == 1)
              {
                  mot_minute = "minute,";
              }

              if (secondes == 0)
              {
                  secondes = '';
                  mot_seconde = '';
                  et = '';
              }
              else if (secondes == 1)
              {
                  mot_seconde = "seconde";
              }

              if (minutes == 0 && heures == 0 && jours == 0)
              {
                  et = "";
              }

              compte_a_rebours.innerHTML = prefixe + jours + ' ' + mot_jour + ' ' + heures + ' ' + mot_heure + ' ' + minutes + ' ' + mot_minute + ' ' + et + ' ' + secondes + ' ' + mot_seconde;
          }
          else
          {
              compte_a_rebours.innerHTML = 'Quiz terminé.';
          }

          var actualisation = setTimeout("compte_a_rebours();", 1000);
      }
      compte_a_rebours();
  </script>

  <script type="text/javascript">
    $(document).ready(function(){

          $("#but_upload").click(function(){

              var fd = new FormData();
              var files = $('#file-with-current')[0].files[0];
              fd.append('file',files);

              $.ajax({
                  url: 'insert.php',
                  type: 'post',
                  data: fd,
                  contentType: false,
                  processData: false,
                  success: function(response){
                      if(response != 0){
                          //$("#img").attr("src",response); 
                          //$(".preview img").show(); // Display image element

                          console.log('success');
                      }else{
                          alert('file not uploaded');
                      }
                  },
              });
          });
      });
    </script>
  </body>

  </html>
