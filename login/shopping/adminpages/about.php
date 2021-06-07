<html>
<head>
<title>About</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>




<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand text-primary" href="#" disabled><h3>Darwin Art Company</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inputform.php">Add</a>
        </li>

        
</div>
</ul>
      <form class="d-flex">
              <a class="nav-link active mr-3" aria-current="page" href="index.html">Logout</a>
      </form>
    </div>
  </div>
</nav>



<div class="about-section">
  <h1>Darwin Art Company</h1>
  <p>Best saler of the art product in the world.</p>
  <p>For more information contact our team.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../imgs/10.jpg" alt="Jane" style="width:100%;height:200px;">
      <div class="container">
        <h2>Simranjeet Kaur</h2>
        <p class="title">CEO & Founder</p>
        <p>Hard worker with good heart.</p>
        <p>simran@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../imgs/5.jpg" alt="Mike" style="width:100%;height:200px;">
      <div class="container">
        <h2>Basanta</h2>
        <p class="title">Art Director</p>
        <p>Smart worker and pantual.</p>
        <p>basanta@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../imgs/8.jpg" alt="John" style="width:100%;height:200px;">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Good learner and experimental.</p>
        <p>pham@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>



</body>
</html>