<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>web15c - LIS5367</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Assignments</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Temperature</a>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>-->
        </ul>

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

 <main role="main" class="container">
<!-- Assignment Start -->

<?php


echo "<h1>Temperature Assignment</h1>";
echo "Converting Fahrenheit to Celsius";

echo "";

echo "<table>";
// table headers
echo "<tr>";
echo    "<th>Fahrenheit</th>";
echo    "<th>Celsius</th>";
echo    "<th>Weather</th>";
echo "</tr>";

for ($i = 0; $i <= 99; $i++) {
// table data
echo "<tr>";

 // 3 <td>'s per <tr>

 echo "<td>";
 // print F temp
 echo "$i";
 echo " °F";
 echo "</td>";

 echo "<td>";
 // print C temp
 $Celsius = ($i - 32 * (5/9));
 echo round($Celsius,1);
 echo " °C";
 echo "</td>";

  
 echo "<td>";
 // print weather
 if ($i < 70) {
 echo "cold";
 } elseif ( $i >= 70 && $i < 90 ) {
 echo "nice";
 } else {
 echo "hot";
 } 
 echo "</td>";


}
echo "</tr>";
echo "</table>";

// start at 0 F

// if F < 70, cold
// if F > 70 but < 90, print nice
// if F > 90, print hot

// F - 32 * (5/9) = C


?>
</main>
<!-- Assignment End -->
