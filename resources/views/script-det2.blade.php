

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Do It Yourself Security Camera</title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span>
              Do It Yourself Security Camera
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
               
                
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
         

          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="box">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <div>
                        <h1>
                          Python
                        </h1>
                        <h2>
                          Do it yourself 
                        </h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/python.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      
         
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

<!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Do it Yourself 
        </h2>
      </div>
      <div class="box">

        
        <div class="detail-box">
          <img src="images/track.png">
          <p> <br> <br>
           Este codigo e um script de python detetar imagem 3d


          </p>
          
          
        </div>
        <pre>
import cv2
import mediapipe as mp
import time

faceDetector = mp.solutions.face_detection
drawing = mp.solutions.drawing_utils


# For webcam input:
cap = cv2.VideoCapture(0)

with faceDetector.FaceDetection(

    min_detection_confidence=0.5) as face_detection:

  while cap.isOpened():

    success, image = cap.read()

    start = time.time()

    if not success:
      print("Ignoring empty camera frame.")
      # If loading a video, use 'break' instead of 'continue'.
      continue

    # Convert the BGR image to RGB.
    image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

    # To improve performance, optionally mark the image as not writeable to
    # pass by reference.
    image.flags.writeable = False
    results = face_detection.process(image)

    # Draw the face detection annotations on the image.
    image.flags.writeable = True
    image = cv2.cvtColor(image, cv2.COLOR_RGB2BGR)
 
    if results.detections:
      for id, detection in enumerate(results.detections):
        drawing.draw_detection(image, detection)

    end = time.time()
    totalTime = end - start

    fps = 1 / totalTime
    print("FPS: ", fps)

    cv2.putText(image, f'FPS: {int(fps)}', (20,70), cv2.FONT_HERSHEY_SIMPLEX, 2, (0,255,0), 2)

    cv2.imshow('MediaPipe Face Detection', image)

    if cv2.waitKey(5) & 0xFF == 27:
      break

cap.release()
          </pre>
      </div>
    </div>
  </section>
  <!-- end about section -->

  

 


 

  

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <div class="info_logo">
              <a href="/">
                <span>
                  Do It Yourself Security Camera
                </span>
              </a>
            </div>
            <h5>
              Contacte nos!
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="" />
              </div>
              <p>
                R. do Covelo 205, 4200-239 Porto
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="18px" alt="" />
              </div>
              <p>
                22 507 2670
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/envelope.png" width="18px" alt="" />
              </div>
              <p>
                securecam28sc@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="info_info">
            <h5>
              Invista nos conhecimentos
            </h5>
            <p>
              Nossa missão é capacitar os entusiastas da segurança doméstica a assumirem o controle de sua proteção residencial, fornecendo recursos valiosos sobre câmeras de segurança caseiras. Seja você um iniciante curioso ou um especialista em eletrônica, nosso site é projetado para atender a todas as necessidades.            </p>
          </div>
        </div>

        
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2023 All Rights Reserved By
      <a href="https://html.design/">Ginja</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>