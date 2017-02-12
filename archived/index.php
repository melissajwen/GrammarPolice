<html>
<head>
</head>

<!-- Input bar and slide -->

<!-- <div class="header">
  <span id="title">Test</span>
</div>

<div id="inputArea" style="animation-name: fadeIn; animation-duration: 0.5s;">
  <div>
    <form id="inputform" action="">
      <textarea id="texttitle" class="form-control" rows="1" type="text" name="tag"></textarea>
      <input id="button" href="#input" class="btn btn-success" type="submit" value="Submit" onclick="get();">
    </form>
  </div>
</div> --> 

 <body>
 <?php
    function changes($str, $fixes, $locations){
      $newString = "";
      $current = explode(" ", $str);

      $addition = 0;
      $currentLocation = 0;
      $positions = [];


      for($i = 0; $i < count($current); $i+=1){
        $positions[] = $currentLocation;
        $currentLocation += (1 + strlen($current[$i]));
      }
      
      $k = 0;
      
      for($j = 0; $j < count($positions); $j+=1){
        if($positions[$j] == $locations[$k]){
          $current[$j] = $fixes[$k];
          $k+=1;
        }
        if($k == count($locations)) {
          break;
        }
      }
      for($m = 0; $m < count($current); $m+=1){
        $newString .= $current[$m];
        if($m < sizeOf($current) - 1){
          $newString .= " ";
        }
      }
      return $newString;  
    }
    
    $a = $_GET['tag'];
    echo $a;

    // if(!empty($_GET['tag'])) {
    //   $orig = $_GET['tag'];
    //   $url = 'https://api.textgears.com/check.php?text=' . urlencode($_GET['tag']) . '&key=nGn5L2nC5xdTe0op';
    //   $json = file_get_contents($url);
    //   $array = json_decode($json, true);

    //   echo '<div id="imagewrapper">';

    //   $numErrors = $array['errors'] + 1;
      
    //   for($i = 0; $i < $numErrors; $i++) {
    //     foreach($array['errors']as $_array) {
    //       $better_id[i] = $_array['better'][0]; 
    //       $offset_id[i] = $_array['offset'];  
    //     }
    //   }
      
    //   changes($orig, $better_id, $offset_id);
      // insert string replace algorithm
    }

?>

<!-- 
<script>
  var comments;

  setInterval(function() {
    comments = document.getElementsByClassName("comment-renderer-text-content");

    var correct = <php echo $scores_id ?>;

    for(var i = 0; i < comments.length; i++) { // loop through number of comments on page
      if(correct != 100) { // if flagged as incorrect grammar
        var comment_length = <php echo $errors_id ?>;
        for(var j = 0; j < comment_length; j++) { // loop through the length of the comment
         
        }
      }
    }
  }

}, 250);
</script> -->

</body>

</html>