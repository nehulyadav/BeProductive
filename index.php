<style>

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: indigo;
   color: white;
   text-align: center;
}



</style>

<?php

//echo $_POST["var"];
echo '  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
echo '  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';



?>

<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-messaging.js"></script>
<script>
  // Initialize Firebase
var config = {
    apiKey: "AIzaSyBaHSrorPiRAu3pXRD-4FMwmCxJAizRbss",
    authDomain: "presentify-ee169.firebaseapp.com",
    databaseURL: "https://presentify-ee169.firebaseio.com",v
    projectId: "presentify-ee169",
    storageBucket: "",
    messagingSenderId: "1045114376426"
  };
  firebase.initializeApp(config);

function writeUserData(name) {
  var database = firebase.database();
  firebase.database().ref('users/' + name).set({
    title: " "
  });
}

</script>

<script type="text/javascript">
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

</script>


<div id="container" class="container">
  <h3>Welcome to BeProductive </h3>
  <p id="heading">Enter the private string that <b> you signed up </b> with:</p>

 <div id="main" class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input class="form-control" id="inp2" type="password" placeholder="" onkeypress="return runScript(event)">
      </div>
        </br>
        <button id="submit" class="btn btn-success">Login</button>
        <button id="submit2" class="btn btn-danger">I am a first time user</button>

  <!-- <?php
// echo '<input type="hidden" name="var" value=' . $su . '><input type="hidden" name="var2" value=' . $_POST["var"] . '><button class="btn btn-success" id="submit">Now show me what my friends are taking!</button>';
  ?> -->


</div>

  <?php

  echo '
<script>
$("#submit").click(function(){
    $("#heading").html("Hang tight...");
    $("#main").slideUp();
    $("#submit").slideUp();
    $("#submit2").slideUp();
  if (document.getElementById("inp2").value == "") {
    alert("enter a valid private string or click signup");
  } else {
    
    firebase.database().ref("/users/").once("value").then(function(snapshot) {
              snapshot.forEach(function(childSnapshot) {
    var user = childSnapshot.key;
    var title = childSnapshot.val().title;
    setTimeout(function(){ alert("Sorry incorrect private string!");
                      location.replace("http://0566fd2b.ngrok.io/login.php"); }, 3000);

                   if (user == document.getElementById("inp2").value) {
                            setCookie("f", document.getElementById("inp2").value, 365);
                            location.replace("http://0566fd2b.ngrok.io/v.php");
                          }
                             


  });
});
}

});

function runScript(e) {
    if (e.keyCode == 13) {
       $("#heading").html("Hang tight...");
    $("#main").slideUp();
    $("#submit").slideUp();
    $("#submit2").slideUp();

        if (document.getElementById("inp2").value == "") {
    alert("enter a valid private string or click signup");
  } else {
    firebase.database().ref("/users/").once("value").then(function(snapshot) {
              snapshot.forEach(function(childSnapshot) {
    var user = childSnapshot.key;
    var title = childSnapshot.val().title;
     setTimeout(function(){ alert("Sorry incorrect private string!");
                      location.replace("http://0566fd2b.ngrok.io/login.php"); }, 3000);
                   if (user == document.getElementById("inp2").value) {
                            setCookie("f", document.getElementById("inp2").value, 365);
                            location.replace("http://0566fd2b.ngrok.io/v.php");
                   } 

  });
});
}
    }
}


$("#submit2").click(function(){
    $("#submit").fadeOut();
    $("#heading").html("Enter a random private string that you can <b> remember as your password </b> below:");
    document.getElementById("inp2").type="text";
    document.getElementById("inp2").placeholder="nehul123";
    $("#submit2").text("I will remember this private string!");
    $("#submit2").click(function(){
    writeUserData(document.getElementById("inp2").value);
    $("#heading").html("Hang tight...");
    $("#main").slideUp();
    $("#submit2").slideUp();
    setTimeout(function(){ location.replace("http://0566fd2b.ngrok.io/login.php");}, 3000);
    
});

});


</script>';



  ?>

<div class="footer">
 

<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fcoursewithfriends.herokuapp.com&width=51&layout=box_count&action=like&size=small&show_faces=false&share=false&height=65&appId" width="51" height="55" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

 <p>
    A Nehul Yadav Production 
    </p>
</div>
