

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
          Do it Yourself TrackFace
        </h2>
      </div>
      <div class="box">

        <div class="img-box">
          <img src="images/track.png" width="300px" height="300px" alt="">
        </div>
        <div class="detail-box">
          <p> <br> <br>
           Este codigo e um script de python de trackingface


          </p>
          
          
        </div>
        <pre>
import cv2
from pyfirmata import Arduino,SERVO
from time import sleep
import mediapipe as mp

face = mp.solutions.face_detection
Face = face.FaceDetection()
mpDwaw = mp.solutions.drawing_utils

port = 'COM4'
pinH = 10
pinV = 8
board = Arduino(port)

board.digital[pinH].mode = SERVO
board.digital[pinV].mode = SERVO

def rotateServo(pin,angle):xa
positionX = 50
positionY = 70

rotateServo(pinH, positionX)
rotateServo(pinV, positionY)

while True:
    ret, img = cap.read()
    imgRGB = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    results = Face.process(imgRGB)
    facesPoints = results.detections
    hO, wO, _ = img.shape

    cv2.line(img,(0,int(hO/2)),(wO,int(hO/2)),(0,255,0),2)
    cv2.line(img, (int(wO / 2), 0), (int(wO / 2), hO), (0, 255, 0), 2)

    if facesPoints:
        for id, detection in enumerate(facesPoints):
            #mpDwaw.draw_detection(img, detection)
            bbox = detection.location_data.relative_bounding_box
            x,y,w,h = int(bbox.xmin*wO),int(bbox.ymin*hO),int(bbox.width*wO),int(bbox.height*hO)

            cv2.rectangle(img,(x,y),(x+w,y+h),(0,255,0),2)
            # centro do rosto
            xx = int(x + (x + w)) // 2
            yy = int(y + (y + h)) // 2
            cv2.circle(img, (xx, yy), 15, (0, 255, 0), cv2.FILLED)

            ctX = int(wO / 2)
            ctY = int(hO / 2)

            cv2.circle(img, (ctX, ctY), 15, (255, 0, 0), cv2.FILLED)

            #movimento eixo X
            if xx < (ctX - 50):
                positionX += 2
                rotateServo(pinH, positionX)
            elif xx > (ctX + 50):
                positionX -= 2
                rotateServo(pinH, positionX)
            # movimento eixo Y
            if yy > (ctY + 50):
                positionY += 2
                rotateServo(pinV, positionY)
            elif yy < (ctY - 50):
                positionY -= 2
                rotateServo(pinV, positionY)


    cv2.imshow('img', img)

    k = cv2.waitKey(1) & 0xff
    if k == 27:
        break



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