

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
                          Arduino
                        </h1>
                        <h2>
                          Do it yourself 
                        </h2>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/arduino-logo.png" alt="" />
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
          Do it Yourself Arduino
        </h2>
      </div>
      <div class="box">

        <div class="img-box">
          
        </div>
        <div class="detail-box">
       
          <p> <br> <br>

           
Programa Arduino - Arduino Camera IP Wifi Control.ino:

          </p>
          
          
        </div>
        <pre>
/*
-------------------------------------------------------------------------------
APP. - Arduino Camera IP Wifi Control.

-------CAMERA AND CONTROLLED SWITCHES IN THE SAME APP.-------

SWITCHES MODE:
- 12 Switches Control ON/OFF Mode Relay 110V/220V;
- 12 Editable DeviceS Mode;
- 12 Status Arduino Ports.

BUTTON LOCK/UNLOCK:
Lock/Unlock Mode Editable Setting Names of the Devices.

BUTTON NET:
Editable Arduino IP: http://
Editable Camera  IP: http://

BUTTON SAVE:
Saves Editable Setting and Names of the Devices.

BUTTON MONITOR TO CAMERA:
Camera Settings;
IP Camera Wifi 3G
Net Connection;
Alarm Setting;
Control Panel;
Diagnosis Tool;
Login/Logout;
320 x 240 Mode;
640 x 480 Mode.

BUTTON PAN TILT MOVIMENTS MODE:
Left, Right, Up and Down Mode.

BUTTON ZOOM CAMERA MODE:
1 x and 2, 5 x Zoom Button camera vision mode.

ARDUINO UNO R3 - INPUT/OUTPUT PINS:

A0 - Device 1;
A1 - Device 2;
A2 - Device 3;
A3 - Device 4;
A4 - Device 5;
A5 - Device 6;
D0 - N/C;
D1 - N/C;
D2 - Device 7;
D3 - Device 8;
D4 - Ethernet Shield SD Card;
D5 - Device 9;
D6 - Device 10;
D7 - Device 11;
D8 - Device 12;
D9 - N/C;
D10 -Ethernet Shield Controller; 
D11 -Ethernet Shield MOSI; 
D12 -Ethernet Shield MISO;  
D13 -Ethernet Shield SCK;  
--------------------------------------------------------------------
*/

#include SPI.h
#include String.h
#include Ethernet.h
//-------------------------------------------------------------------
byte mac[] = {0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };//MAC padrão;
IPAddress ip(192, 168, 2, 50);//Define o endereco IPv4(trocar final);
IPAddress gateway(192, 168, 2, 1);      //Define o gateway
IPAddress subnet(255, 255, 255, 0); //Define a máscara de rede
EthernetServer server(80); // Porta de serviço
//-------------------------------------------------------------------
int AA0 = A0;//Arduino analogica A0;
int AA1 = A1;//Arduino analogica A1;
int AA2 = A2;//Arduino analogica A2;
int AA3 = A3;//Arduino analogica A3;
int AA4 = A4;//Arduino analogica A4;
int AA5 = A5;//Arduino analogica A5;
//-------------------------------------------------------------------
int D2 = 2;//Arduino digital D2;
int D3 = 3;//Arduino digital D3;
int D5 = 5;//Arduino digital D5;
int D6 = 6;//Arduino digital D6;
int D7 = 7;//Arduino digital D7;
int D8 = 8;//Arduino digital D8;
//-------------------------------------------------------------------
String readString = String(30); // string para buscar dados de endereço
boolean statusA0 = false; // Variável para o status do led 
boolean statusA1 = false; // Variável para o status do led 
boolean statusA2 = false; // Variável para o status do led 
boolean statusA3 = false; // Variável para o status do led 
boolean statusA4 = false; // Variável para o status do led 
boolean statusA5 = false; // Variável para o status do led 

boolean statusD2 = false; // Variável para o status do led 
boolean statusD3 = false; // Variável para o status do led 
boolean statusD5 = false; // Variável para o status do led 
boolean statusD6 = false; // Variável para o status do led 
boolean statusD7 = false; // Variável para o status do led 
boolean statusD8 = false; // Variável para o status do led 
//--------------------------------------------------------------------
void setup(){
  // Inicia o Ethernet
  //Ethernet.begin(mac, ip);
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
//-----------------------Define pino como saída-----------------------
  pinMode(AA0, OUTPUT);
  pinMode(AA1, OUTPUT);
  pinMode(AA2, OUTPUT);
  pinMode(AA3, OUTPUT);
  pinMode(AA4, OUTPUT);
  pinMode(AA5, OUTPUT);
  
  pinMode(D2, OUTPUT);
  pinMode(D3, OUTPUT);
  pinMode(D5, OUTPUT);
  pinMode(D6, OUTPUT);
  pinMode(D7, OUTPUT);
  pinMode(D8, OUTPUT);
  
 //Devido a lógida invertida de acionamento dos relés,
 //devemos iniciar os canais AA0, AA1, AA2...D8; 
 //com nível alto 5V(HIGH) como segue abaixo;

 //Módulo relé atua com lógica invertida:
 //Entrada do módulo relé em nível lógico "0V":Bobina Energizada;
 //Contato N/A(N/O)>>Fecha contato;
 //Entrada do módulo relé em nível lógico "5V":Bobina Desernegizada;
 //Contato N/A(N/O)>>Abre contato;

 digitalWrite(AA0,HIGH);
 digitalWrite(AA1,HIGH);
 digitalWrite(AA2,HIGH);
 digitalWrite(AA3,HIGH);
 digitalWrite(AA4,HIGH);
 digitalWrite(AA5,HIGH);

 digitalWrite(D2,HIGH);
 digitalWrite(D3,HIGH);
 digitalWrite(D5,HIGH);
 digitalWrite(D6,HIGH);
 digitalWrite(D7,HIGH);
 digitalWrite(D8,HIGH);
//---------------------------------------------------------------------
  // Inicia a comunicação Serial
  Serial.begin(9600); 
}

void loop(){
  // Criar uma conexão de cliente
  EthernetClient client = server.available();
  
  if (client) {
    while (client.connected())
    {
      if (client.available())
      {
        char c = client.read();
        // ler caractere por caractere vindo do HTTP
        if (readString.length() < 30)
        {
          // armazena os caracteres para string
          readString += (c);
        }

        
        //se o pedido HTTP terminou
        if (c == '\n')
          {
//------------------------------------------------------------------
        if(readString.indexOf("a0high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(AA0, LOW);//Arduino porta digital A0=5V;
            statusA0 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a0low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA0, HIGH);//Arduino porta digital A0=0V;
            statusA0 = false;
          }
//------------------------------------------------------------------
       if(readString.indexOf("a1high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(AA1, LOW);//Arduino porta digital A1=5V;
            statusA1 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a1low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA1, HIGH);//Arduino porta digital A1=0V;
            statusA1 = false;
          }
//------------------------------------------------------------------
       if(readString.indexOf("a2high")>=0)//Recebido do Android;
          {
            // Turn ON the Relay.
            digitalWrite(AA2, LOW);//Arduino porta digital A2=5V;
            statusA2 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a2low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA2, HIGH);//Arduino porta digital A2=0V;
            statusA2 = false;
          }
//------------------------------------------------------------------
       if(readString.indexOf("a3high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(AA3, LOW);//Arduino porta digital A3=5V;
            statusA3 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a3low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA3, HIGH);//Arduino porta digital A3=0V;
            statusA3 = false;
          }
//------------------------------------------------------------------
       if(readString.indexOf("a4high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(AA4, LOW);//Arduino porta digital A4=5V;
            statusA4 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a4low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA4, HIGH);//Arduino porta digital A4=0V;
            statusA4 = false;
          }
//------------------------------------------------------------------
       if(readString.indexOf("a5high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(AA5, LOW);//Arduino porta digital A5=5V;
            statusA5 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("a5low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(AA5, HIGH);//Arduino porta digital A5=0V;
            statusA5 = false;
          }          
//------------------------------------------------------------------        
          if(readString.indexOf("d2high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(D2, LOW);//Arduino porta digital D2=5V;
            statusD2 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d2low")>=0)//Recebido do Android;
          {
            // Turn OFF the Relay.
            digitalWrite(D2, HIGH);//Arduino porta digital D2=0V;
            statusD2 = false;
          }
//------------------------------------------------------------------        
          if(readString.indexOf("d3high")>=0)//Recebido do Android;
          {
          // Turn ON the Relay.
            digitalWrite(D3, LOW);//Arduino porta digital D3=5V;
            statusD3 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d3low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(D3, HIGH);//Arduino porta digital D3=0V;
            statusD3 = false;
          }
//------------------------------------------------------------------        
          if(readString.indexOf("d5high")>=0)//Recebido do Android;
          {
          // Turn ON the Relay.
            digitalWrite(D5, LOW);//Arduino porta digital D5=5V;
            statusD5 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d5low")>=0)//Recebido do Android;
          {
            // Turn OFF the Relay.
            digitalWrite(D5, HIGH);//Arduino porta digital D5=0V;
            statusD5 = false;
          }
//------------------------------------------------------------------        
          if(readString.indexOf("d6high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(D6, LOW);//Arduino porta digital D6=5V;
            statusD6 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d6low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(D6, HIGH);//Arduino porta digital D6=0V;
            statusD6 = false;
          }
//------------------------------------------------------------------        
          if(readString.indexOf("d7high")>=0)//Recebido do Android;
          {
           // Turn ON the Relay.
            digitalWrite(D7, LOW);//Arduino porta digital D7=5V;
            statusD7 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d7low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(D7, HIGH);//Arduino porta digital D7=0V;
            statusD7 = false;
          } 
//------------------------------------------------------------------        
          if(readString.indexOf("d8high")>=0)//Recebido do Android;
          {
          // Turn ON the Relay.
            digitalWrite(D8, LOW);//Arduino porta digital D8=5V;
            statusD8 = true;
          }
          // Se a string possui o texto L=Desligar
          if(readString.indexOf("d8low")>=0)//Recebido do Android;
          {
           // Turn OFF the Relay.
            digitalWrite(D8, HIGH);//Arduino porta digital D8=0V;
            statusD8 = false;
          }         
//------------------------------------------------------------------         
        // dados HTML de saída começando com cabeçalho padrão
        client.println("HTTP/1.1 200 OK");
        client.println("Content-Type: text/html");
        client.println();      
        client.print("");
//------------------------------------------------------------------  
 if (statusA0) {
          client.print("azeroon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("azerooff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------  
if (statusA1) {
          client.print("aoneon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("aoneoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
if (statusA2) {
          client.print("atwoon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("atwooff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------  
if (statusA3) {
          client.print("athreeon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("athreeoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
if (statusA4) {
          client.print("afouron");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("afouroff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
if (statusA5) {
          client.print("afiveon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("afiveoff");//Ethernet envia string para Android;
          //String apenas letras;
        }        
//------------------------------------------------------------------        
        if (statusD2) {
          client.print("dtwoon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("dtwooff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
        if (statusD3) {
          client.print("dthreeon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("dthreeoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
        if (statusD5) {
          client.print("dfiveon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("dfiveoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
        if (statusD6) {
          client.print("dsixon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("dsixoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
        if (statusD7) {
          client.print("dsevenon");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("dsevenoff");//Ethernet envia string para Android;
          //String apenas letras;
        }
//------------------------------------------------------------------ 
        if (statusD8) {
          client.print("deighton");//Ethernet envia para Android;
          //String apenas letras;
        } else {
          client.print("deightoff");//Ethernet envia string para Android;
          //String apenas letras;
        }        
//------------------------------------------------------------------ 
        //limpa string para a próxima leitura
        readString="";
        
        // parar cliente
        client.stop();
        }
      }
    }
  }
}



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