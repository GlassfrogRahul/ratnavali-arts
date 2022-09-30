<?php
    require_once('config.php');
    require_once('authentication.php');

  
    if(!isset($user)) {
        header("Location: login.php");
    }

    $countries = array();

    $countries_query = "SELECT `country_id`, `country_name`, `country_code`, `timezone` FROM `countries`";
    $countries_query_exec = mysqli_query($conn, $countries_query);

    while($row = mysqli_fetch_array($countries_query_exec)) {
        $countries[$row['country_id']] = $row;
    }

    
    $app_query="SELECT `session`,`token` FROM `booked_slots` WHERE `slot_id`='".$_GET['r']."'";
    $appoint_ex=mysqli_query($conn,$app_query);
    $app=mysqli_fetch_assoc($appoint_ex);

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratnavali </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="asssets/css/video.css">
<style>
body{
  background-color: gray;
}

</style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.4.1/socket.io.js" integrity="sha512-MgkNs0gNdrnOM7k+0L+wgiRc5aLgl74sJQKbIWegVIMvVGPc1+gc1L2oK9Wf/D9pq58eqIJAxOonYPVE5UwUFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    <script>
     const path="/user-dashboard.php";
      const userName = "<?= $user['name'] ?>";
      const apiKey = "47580871";
      const sessionId = "<?=  $app['session'] ?>";
      const token = "<?=  $app['token'] ?>";

      const userType="user";
    </script>
    <script src="https://static.opentok.com/v2/js/opentok.min.js"></script>
    <script src="https://scandel.github.io/pdfThumbnails/pdfThumbnails.js" data-pdfjs-src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.js"></script>
</head>
<body>

  

    <div class="h-100 w-100 position-relative window "> <!-- Add class single -->  
        <div class="subscriber" id="subscriber"> <!-- Add class stop --> 
          <p class="name d-none" id="clientName">Cleint Name</p><!-- Remove class d-none -->
          <div class="imagebox d-none"><!-- Remove class d-none -->
            <img src="https://images.unsplash.com/photo-1644347542604-2ae09ac7f24a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="">
          </div>
          <video id="remoteVideo" playsinline autoplay muted class="d-none"></video> <!-- Remove class d-none -->
          <audio id="remoteAudio" autoplay playsinline></audio>
          <div class="client-mic align-items-center justify-content-center d-none"><!-- Remove class d-none and add class d-flex -->
            <svg>
              <use href="{{asset('css/sprite.svg')}}#icon-mic"></use>
            </svg>
            <svg>
              <use href="{{asset('css/sprite.svg')}}#icon-mic_off"></use>
            </svg>
          </div>
        </div>
        <div class="publisher" id="publisher">
          <div class="imagebox d-none"><!-- Remove class d-none -->
            <img src="https://images.unsplash.com/photo-1644347542604-2ae09ac7f24a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1974&q=80" alt="">
          </div>
          <p class="name d-none">You</p><!-- Remove class d-none -->
          <video id="localVideo" playsinline autoplay muted class="d-none"></video><!-- Remove class d-none -->
        </div>

        <div class="screen">
          <video id="screenVideo" playsinline autoplay muted></video>
          <div class="overlay-screen d-flex justify-content-center align-items-center">
            <h6>You are sharing!</h6>
          </div>
        </div>


        <nav class="video-navbar w-100 position-absolute">
          <ul class="video-navlist d-flex justify-content-center align-items-center mb-0  pl-0">

                <li class="video-navitem active switch-camera d-flex align-items-center justify-content-center p-2 mr-2"  onclick="switchCamera()">
              <svg>
                <use href="asssets/icons/sprite.svg#icon-flip_camera_ios"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-flip_camera_ios"></use>
              </svg>
            </li> 
            
            <li class="video-navitem active d-lg-none align-items-center justify-content-center p-2 mr-2 d-none" onclick="changeCamera()"><!-- Remove class d-none and add class d-flex -->
              <svg>
                <use href="asssets/icons/sprite.svg#icon-flip_camera_ios"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-flip_camera_ios"></use>
              </svg>
            </li>
            <li class="video-navitem active mic d-flex align-items-center justify-content-center p-2 mr-2" onclick="toggleMic()">
              <svg>
                <use href="asssets/icons/sprite.svg#icon-mic"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-mic_off"></use>
              </svg>
            </li>
            <li class="video-navitem active camera d-flex align-items-center justify-content-center p-2 mr-2" onclick="toggleCamera()">
              <svg>
                <use href="asssets/icons/sprite.svg#icon-videocam"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-videocam_off"></use>
              </svg>
            </li>
            <li class="video-navitem screen-button d-none align-items-center justify-content-center p-2 mr-2" onclick="screenShare()"><!-- Add class d-lg-flex -->
              <svg>
                <use href="asssets/icons/sprite.svg#icon-airplay"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-airplay"></use>
              </svg>
            </li>

            <li class="video-navitem call d-flex align-items-center justify-content-center p-2 mr-2" onclick="redirect()">
              <svg>
                <use href="asssets/icons/sprite.svg#icon-call_end"></use>
              </svg>
              <svg>
                <use href="asssets/icons/sprite.svg#icon-call_end"></use>
              </svg>
            </li>
          </ul>
        </nav>
    </div>

 
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.7.1/jszip.min.js" integrity="sha512-xQBQYt9UcgblF6aCMrwU1NkVA7HCXaSN2oq0so80KO+y68M+n64FOcqgav4igHe6D5ObBLIf68DWv+gfBowczg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
// replace these values with those generated in your TokBox Account
var publisher;
var session;
//Handling all of our errors here by alerting them
function handleError(error) {
  if (error) {
    alert(error.message);
  }
}
// (optional) add server code here
initializeSession();
function initializeSession() {
 session = OT.initSession(apiKey, sessionId);
  // Subscribe to a newly created stream
  session.on('streamCreated', function(event) {
    session.subscribe(event.stream, 'subscriber', {
      insertMode: 'append',
      width: 'auto',
      height: '100%'
    }, handleError);
  });
  
  // Create a publisher
  publisher = OT.initPublisher('publisher', {
    insertMode: 'append',
    width: 'auto',
    height: '100%'
  }, handleError);
  // Connect to the session


  
 
  session.connect(token, function(error) {
    // If the connection is successful, initialize a publisher and publish to the session
    if (error) {
      handleError(error);
    } else {
      session.publish(publisher, handleError);
    }
  });
}


const switchCamera=function(){
    publisher.cycleVideo().then(
       
    );
  }


  //mic coding
const toggleMic = function(){
    const button = document.querySelector('.video-navitem.mic');
    let active = button.classList.contains('active');
    button.classList.toggle('active', !active);
    publisher.publishAudio(!active);
} 

//camera coding
const toggleCamera = function(){
    const button = document.querySelector('.video-navitem.camera');
    let active = button.classList.contains('active');
    button.classList.toggle('active', !active);
    publisher.publishVideo(!active);
} 

function redirect(){
    const a = document.createElement('a');
    a.href=window.location.origin + path;
    a.click();
}

</script>
<script src="asssets/js/video.js"></script>
