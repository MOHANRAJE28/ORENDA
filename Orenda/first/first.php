<?php
    include('../home/session.php');
   	
    require('../connect.php');
    $name=$_SESSION['username'];
    $date=$_SESSION['date'];
?>
<html>
  <head>
    <title>orenda</title>
    <link rel="icon" href="logo.png" type="image/icon type" />
    <link href="home.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <section class="s1">
      <nav>
        <a href="first.php"><img class="loim" src="logo1.png" /></a>
        <ul>
          <li><a href="first.php">HOME</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="../home/logout.php">LOGOUT</a></li>
          <li><img src="https://img.icons8.com/external-others-inmotus-design/67/null/external-User-basic-web-ui-elements-others-inmotus-design.png " width="25px" /></li>
          <li><?php echo"$name" ?> </li>  
        </ul  >
      </nav>

      <h1>Orenda</h1>
      <div class="textbox">
        <p>
          The objective of the farming app is to provide a user-friendly
          interface for farmers to manage their crops and live tracking of
          expenses. The app will allow farmers to track of expenses of the
          crop, monitor weather conditions and soil testing, and receive alerts
          for pest and disease out breaks
        </p>
      </div>
      <div class="button">
      <button ><a href="#pname">
        <span> Visit Me </span></a>
      </button>
    </div>
    </section>
    <section class="s2" style="height:85vh">
      <a name="pname">I
      <h2 class="fea">Features</h2>

      <div class="row">
        <div class="cardm">
          <!--climate card-->
          
          <div class="card">
            <a href="../climate/index.html">
            <img
              class="weather"
              src="https://img.icons8.com/external-flaticons-flat-flat-icons/64/null/external-climate-plants-flaticons-flat-flat-icons-2.png"
            />
            <div class="main">Climate</div></a>
          </div>
          <div class="card2">
            <div class="upper">
              <div class="humidity">
                <div class="humiditytext">Humidity<br />30%</div>
                <img
                  src="https://img.icons8.com/ultraviolet/40/null/moisture.png"
                  width="25px"
                  height="25px"
                />
              </div>

              <div class="air">
                <div class="airtext">Wind<br />8 Km/h</div>
                <img
                src="https://img.icons8.com/external-others-aquariid/64/null/external-climate-weather-others-aquariid-42.png"/
                width="25px" height="25px">
              </div>
            </div>

            <div class="lower">
              <div class="aqi">
                <div class="aqitext">AQI<br />30</div>
                <img
                  src="https://img.icons8.com/clouds/100/null/climate-change.png"
                  width="25px"
                  height="25px"
                />
              </div>

              <div class="realfeel">
                <div class="realfeeltext">Real Feel<br />21 °C</div>
                <img
                  src="https://img.icons8.com/external-wanicon-lineal-color-wanicon/64/null/external-climate-farming-and-agriculture-wanicon-lineal-color-wanicon.png"
                  width="25px"
                  height="25px"
                />
              </div>
              <div class="pressure">
                <div class="pressuretext">Pressure<br />1012 mbar</div>
                <img
                  src="https://img.icons8.com/color/48/null/pressure.png"
                  width="25px"
                  height="25px"
                />
              </div>
              
              <div class="card3">Climate</div>
            </div>
          </div>
        </div>

        <!--commuity-->

        <div class="cardm1">
          <!--community card-->
          <div class="card">
           <a href="../home/home.php"> <img
              class="weather"
              src="https://img.icons8.com/color/96/null/people-working-together.png"
              width="50"
              height="50"
            />
            <div class="main">Farm <br />Voice</div></a>
          </div>
          <div class="card2">
            <div class="upper">
              <div class="humidity">
                <div class="humiditytext">Question<br />...</div>
                <img
                  src="https://img.icons8.com/fluency/48/null/question-mark.png"
                  width="20px"
                  height="20px"
                />
              </div>

              <div class="air">
                <div class="airtext">Answer<br />...</div>

                <img
                  class="problem"
                  src="https://img.icons8.com/external-sbts2018-outline-color-sbts2018/58/null/external-answer-basic-ui-elements-2.4-sbts2018-outline-color-sbts2018.png"
                  width="25px"
                  height="25px"
                />
              </div>
            </div>

            <div class="lower">
              <div class="aqi">
                <div class="aqitext">Like</div>
                <img
                  src="https://img.icons8.com/stickers/100/null/facebook-like.png"
                  width="25px"
                  height="25px"
                />
              </div>

              <div class="realfeel">
                <div class="realfeeltext">Comment</div>
                <img
                  src="https://img.icons8.com/ultraviolet/40/null/comments.png"
                  width="25px"
                  height="25px"
                />
              </div>
              <div class="pressure">
                <div class="pressuretext">Dislike</div>
                <img
                  src="https://img.icons8.com/stickers/100/null/thumbs-down.png"
                  width="25px"
                  height="25px"
                />
              </div>
              <div class="card3">community</div>
            </div>
          </div>
        </div>

        <!--soil detection-->

        <div class="cardm2">
          <!--soil card-->
          <div class="card">
            <a href="../soil/soil.php"><img
              class="weather"
              src="https://img.icons8.com/clouds/100/null/soil.png"
              width="70px"
              height="70px"
            />
            <div class="main">Soil</div></a>
          </div>
          <div class="card2">
            <div class="upper">
              <div class="humidity">
                <div class="humiditytext">Moisture<br />...</div>
                <img
                  src="https://img.icons8.com/fluency/48/null/moisture.png"
                  width="25px"
                  height="25px"
                />
              </div>

              <div class="air">
                <div class="airtext">Humidity<br />...</div>
                <img
                  src="https://img.icons8.com/office/30/null/hygrometer.png"
                  width="25px"
                  height="25px"
                />
              </div>
            </div>

            <div class="lower">
              <div class="aqi">
                <div class="aqitext">Potassium</div>
                <img
                  src="https://img.icons8.com/external-glyph-silhouettes-icons-papa-vector/78/null/external-Potassium-fertilizers-glyph-silhouettes-icons-papa-vector.png"
                  width="25px"
                  height="25px"
                />
              </div>

              <div class="realfeel">
                <div class="realfeeltext">Nitrogen</div>
                <img
                  src="https://img.icons8.com/external-filled-color-icons-papa-vector/78/null/external-Nitrogen-fertilizers-filled-color-icons-papa-vector.png"
                  width="25px"
                  height="25px"
                />
              </div>
              <div class="pressure">
                <div class="pressuretext">Phosphorus</div>
                <img
                  src="https://img.icons8.com/external-others-papa-vector/78/null/external-Phosphorus-fertilizers-others-papa-vector.png"
                  width="25px"
                  height="25px"
                />
              </div>
              <div class="card3">Soil Detection</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer">
      <h4>About Us</h4>
      <p>
        The objective of the farming app is to provide a user-friendly interface
        for farmers to manage their crops and live tracking of expensive. The
        app will allow farmers to track of expensive of the crop, monitor
        weather conditions and soil testing, and receive alerts for pest and
        disease out breaks
      </p>
      <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
      </div>

      <p>Made for <i class="fa fa-heart-o"></i> lovely farmers</p>
    </section>
  </body>
</html>