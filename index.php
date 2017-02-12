<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="favicon.png"/>

      <title>Grammar Police</title>
      <link rel="stylesheet" href="css/bootstrap.css">

      <script>
          $(document).ready(function(){
            $("buttonB").on('click', function(event) {
              if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 700, function(){
                  window.location.hash = hash;
                });
              }
            });
          });
      </script>

 	<script type="text/javascript" src="jquery.js"></script>
      <script src="https://apis.google.com/js/api.js"></script>

    </head>

    <style>
      body {
        font-family: futuracustom;
        background-color: #dddddd;
        margin: 20px;
        cursor: default;
      }
      @font-face {
        font-family: futuracustom;
        src: url('fonts/futuracustom.ttf');
      }
      @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
      }
      footer {
        position: absolute;
        bottom: 10px;
      }

      #inputArea {
        margin: 20px;
      }

      .form-control {
        text-align: center;
        font-size: 14px;
      }

      #slide {
        background-color: white;
        height: 660px;
        padding: 20px 20px;
        margin-top: 65px;
        margin-bottom: 20px;
      }
      #point {
        position: absolute;
        top:835px;
        right: 10%;
        text-align: left;
        width: 38%;
        font-size: 19px;
      }
      #picture {
        background-color: blue;
        position: absolute;
        top: 33%;
        left: 10%;
      }
      .btn {
        width: 100%;
        margin-top: 5px;
      }
      #heading {
        outline: none;
        border: white;
        font-size: 32px;
        text-align: center;
      }

      #imagewrapper {
        float: left;
        width: 50%;
        padding: 80px 75px;


      }
      .image {
        padding: 5px;
        object-fit: cover;
        width: 200px;
        height: 200px;
        float: left;
        
      }
      #texttitle {
        font-size: 24px;
      }
      #textparagraph {
        padding: 40px 100px;
        text-align: left;
        font-size: 20px;
      }
      .header {
        margin: 0 30px;
        padding-bottom: 40px;
      }
      #us {
        text-align: inline-block;
        float: left;
        font-size: 30px;
      }
      a {
        text-align: inline-block;
        float: right;
        margin-left: 10px;
        padding: 4 30px;
        font-size: 18px;
        text-decoration: none;
        color: black;
        transition: .2s;
      }

      a:hover {
        text-decoration: none;
        color: white;
        background-color: black;
      }

      .titleStyle {
        font-size: 50px;
        margin: 30px 30px -10px 30px;
      }
      hr {
        width: 500px;
        color: blue;
      }
      #logo {
        position: absolute;
        top: 20px;
        left: 60px;
        height: 42px;
      }
      #title {
        position: absolute;
        top: 25px;
        font-size: 24px;
        left: 155px;
      }
    </style>

<!-- <body class="text-center">


<!-- Input bar and slide -->

<div class="header">
  <span id="title">Test</span>
</div>

<div id="inputArea" style="animation-name: fadeIn; animation-duration: 0.5s;">
  <div>
    <form id="inputform" action="">
      <textarea id="texttitle" class="form-control" rows="1" type="text" name="tag"></textarea>
      <input id="button" href="#input" class="btn btn-success" type="submit" value="Submit" onclick="get();">
    </form>
  </div>
</div>

 <body>
    <?php
      if(!empty($_GET['tag'])) {
        echo $_GET['tag'];
        $url = 'https://api.textgears.com/check.php?text=' . urlencode($_GET['tag']) . '&key=nGn5L2nC5xdTe0op';
        $json = file_get_contents($url);
        $array = json_decode($json, true);

        echo '<div id="imagewrapper">';
      
          foreach($array['errors']as $_array) {
            $offset_id = $_array['offset'];
            $length_id = $_array['length'];
            $better_id = $_array['better'][0];
          }
     
      // insert string replace algorithm
      }
    ?>

<!-- 
<script>
  var comments;

  setInterval(function() {
    comments = document.getElementsByClassName("comment-renderer-text-content");

    var correct = <?php echo $scores_id ?>;

    for(var i = 0; i < comments.length; i++) { // loop through number of comments on page
      if(correct != 100) { // if flagged as incorrect grammar
        var comment_length = <?php echo $errors_id ?>;
        for(var j = 0; j < comment_length; j++) { // loop through the length of the comment
         
        }
      }
    }
  }

}, 250);
</script> -->

</body>

</html>