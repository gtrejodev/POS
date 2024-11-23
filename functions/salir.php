<?php

function salir($message=null, $type=null, $use_case=null, $extra=null) {
  
  $structure = ["message"=>"No message.", "type"=>"default", "use_case"=>"API"];
  
  if($use_case == null && $type == null && $message == null && $extra == null){ exit( json_encode($structure) ); }
  
//  $structure = [
//    "use_case" => $use_case,
//    "type" => $type,
//    "message" => $message,
//    "extra" => $extra
//  ];
  
  $structure = ["message"=>$message, "type"=>$type, "use_case"=>$use_case];
  
  if($extra !== null){ $structure['extra'] = $extra; }
  
  if(strtoupper($use_case) == "API" || strtoupper($use_case) != "HTML") { exit(json_encode($structure)); }
  
  
  $body = "<div class='wrapper' style='padding: 5px 15px; border-radius: 8px; border: 2px #d8d8d8 solid; background: #eeeeee; max-width: 600px; margin: 0 auto'>";
  switch($type){
    case "Notice":
      $body .= "<div class='title notice' style='font-size: 40px; text-shadow: -2px 2px 1px rgba(0, 30, 78, 0.4); font-weight:600; color: #1996ef;'>Notice</div>";
      break;
    case "Warning":
      $body .= "<div class='title warning' style='font-size: 40px; text-shadow: -2px 2px 1px rgba(93, 65, 0, 0.4); font-weight:600; color: #ffd034;'>Warning</div>";
      break;
    case "Error":
      $body .= "<div class='title Error' style='font-size: 40px; text-shadow: -2px 2px 1px rgba(95, 0, 0, 0.4); font-weight:600; color: #9b0000;'>Error</div>";
      break;
    default:
      $body .= "<div class='title default' style='font-size: 40px; text-shadow: -2px 2px 1px rgba(72, 72, 72, 0.4); font-weight:600; color: #434343;'>System Message</div>";
  }
  $body .= "<div class='message' style='margin: 15px -0px 15px -0px; padding: 10px 15px; background-color: #fff; border-radius: 8px;'>$message</div>";
  
  
  if($extra != null ){ $body .= "<div class='extra' style='margin: -5px -10px 0px -10px; padding: 10px 15px; background-color: rgba(196, 196, 196, 0.4); border-radius: 8px;'><i><b>Extra</b></i><pre>"; $body .= print_r($extra, true) ; $body .= "</pre></div>"; }
  
  exit($body);
  
}

//salir("Este es un mensaje de preuba","Notice","html");