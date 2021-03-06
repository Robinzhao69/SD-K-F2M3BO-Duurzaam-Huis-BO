<?php
        
        // Report all errors
        // Dit is nu handig bij het testen
        // In een productie omgeving doe je dit niet of anders
        error_reporting(E_ALL);


        
        // my API reageert op GET en POST requests
        print "<h3>hello from myAPI !!</h3>"; // say hello to client
     
        $myTime = time(); // get the server time
        $pi = pi();
        $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $flip = array_flip($a1);

		if (!empty($_GET['data'])){  
            $dataFromGet= $_GET['data'];
            print "<h4>GET request ontvangen</h4>";
            print "de data uit het GET request is: " . $dataFromGet;
            switch($dataFromGet){
                case "server":
                        print "<pre>my server variables are:  " ;
                        print_r($_SERVER);  // show server data
                        print "</pre>"; 
                    break;
                case "tijd":
                        print "<br>server tijd: " . date("h:i:s",$myTime);
                    break;

                 // hier moet jij zelf code schrijven
                    
                case "easter egg":
                    print " <br>Hey look its an 🥚";
                    break;
                case "car":
                    print " <br>The 🏎️ goes vroom!";
                    break;
                  // einde eigen code 
                  
                case "pi":
                    print "<br> the value of pi is: " . $pi;

                default:
                    print "<h3>please read the manual for valid requests &#128540;</h3>";
                
            }
        }        
?>
