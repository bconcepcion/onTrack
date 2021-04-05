<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">onTrack</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Resources</a>
      <a class="nav-item nav-link href="# href="#">About Us</a>
    </div>
  </div>
</nav>

    <h1>Infant Milestone Survey</h1>

    <!-- <p> What day is it today?</p>
    <label>

    <input type="radio" value="y" name="q1"> yes 
  
    </label>
<br>
    <label>

    <input type="radio" value="n" name="q1"> no
  
    </label> -->

    <?php

//connect to database
$cnt = mysqli_connect("localhost", "root", "root", "infantSurveyQuestions");

//sql statement to capture all data from a table
$sql = "SELECT * FROM tblsurvey";

//query by connecting and adding sql statement
$result = mysqli_query($cnt,$sql);
//print_r($result);

foreach($result as $v) {
  // if statement to look at $vSegment and see if equal to the months //
  if ($v['Segment'] == 1) {
    echo '<br>';
    echo ' <p> '.$v['Question'].' </p>
    <label>
  
    <input type="radio" value="y" name="q'.$v['ID'].'"> yes 
  
    </label>
  <br>
    <label>
  
    <input class="flag" type="radio" value="n" name="q'.$v['ID'].'"> no
  
    </label>';


  }

}

//close the connection
mysqli_close($cnt); // Closing Connection
?>



<!-- Button trigger modal -->
<button id="completed" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Survey Results</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div id="wrong0"></div> 
       <div id="wrong"></div> 
        <div id="wrong2"></div>
        <div id="right"></div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>




  <script>
  $('#completed').click(function(){
    console.log($('.flag:checked').length)
    let answer = $('.flag:checked').length
    if ($('.flag:checked').length > 0) {
      $('#wrong0').text('You answered');
      $('#wrong').text(answer);
      $('#wrong2').text('wrong please consult with your pediatrician regarding your childs progress.');
     


   
  } else {
    $('#right').text('You answered every question correctly please check the resources section for more assistance.');
  } ;  
    

  });
  </script>

  </body>
</html>