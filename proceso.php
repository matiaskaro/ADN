
<?php
//******Programa principal******
$sum =0;
$x=0;

///**** inicio API***** */
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $dato = $_POST;
        
          $string = $dato["d"];
      
      	 }
///**** fin API***** */


//Recibo Datos
$adn = $_POST["adn"];
if($adn==""){$adn = $string;}
echo $adn;
$tam = strlen($adn);
//$d=trim($adn);
$searchString = " ";
$replaceString = "";
$originalString = $adn; 
 
$d= str_replace($searchString, $replaceString, $originalString, $count);
$dna=str_split($d);
$dnaa=str_split($adn);
$resul = isForceUser($dna);
if($resul==0){echo "False";}
else{echo "True";}
echo $resul;

//*****Mètodo ********/
function isForceUser($asigno){
//Cantidad de caracteres
global $tam;
global $adn;
global $dnaa;

for($i=0;$i<$tam;$i++){
if($dnaa[$i]==" "){
break;}
}
$tamf= $i;
$tamc=$i;
$tamt=$i;
//Asignacion a Matriz
$k=0;
for($f=0;$f<$tamf;$f++){
    
        for($c=0;$c<$tamc;$c++){
         $arr[$f][$c] = $asigno[$k];
       $k++;
    }
    }
 $res=0;   
for($f=0;$f<$tamf;$f++){
    for($c=0;$c<$tamc;$c++){
    //Diagonal principal    
    if($f==$c){
    if(($arr[$f][$c])=="A"){
        if($arr[$f+1][$c+1]=="A"){
            if($arr[$f+2][$c+2]=="A"){
             if($arr[$f+3][$c+3]=="A"){
               $ad=$ad+1;
                 
             }   
            }
        }
           }}
           if($f==$c){
            if(($arr[$f][$c])=="C"){
                if($arr[$f+1][$c+1]=="C"){
                    if($arr[$f+2][$c+2]=="C"){
                     if($arr[$f+3][$c+3]=="C"){
                       $cd=$cd+1;
                         
                     }   
                    }
                }
                   }}
                   if($f==$c){
                    if(($arr[$f][$c])=="G"){
                        if($arr[$f+1][$c+1]=="G"){
                            if($arr[$f+2][$c+2]=="G"){
                             if($arr[$f+3][$c+3]=="G"){
                               $gd=$gd+1;
                                 
                             }   
                            }
                        }
                           }}
                           if($f==$c){
                            if(($arr[$f][$c])=="T"){
                                if($arr[$f+1][$c+1]=="T"){
                                    if($arr[$f+2][$c+2]=="T"){
                                     if($arr[$f+3][$c+3]=="T"){
                                       $td=$td+1;
                                         
                                     }   
                                    }
                                }
                                   }}
    //Horizontales
    if(($arr[$f][$c])=="A"){
       if($arr[$f][$c+1]=="A"){
           if($arr[$f][$c+2]=="A"){
            if($arr[$f][$c+3]=="A"){
              $ah=$ah+1;
                
            }   
           }
       }
          }
          if(($arr[$f][$c])=="C"){
            if($arr[$f][$c+1]=="C"){
                if($arr[$f][$c+2]=="C"){
                 if($arr[$f][$c+3]=="C"){
                   $ch=$ch+1;
                     
                 }   
                }
            }
               }
               if(($arr[$f][$c])=="G"){
                if($arr[$f][$c+1]=="G"){
                    if($arr[$f][$c+2]=="G"){
                     if($arr[$f][$c+3]=="G"){
                       $gh=$gh+1;
                         
                     }   
                    }
                }
                   }
    if(($arr[$f][$c])=="T"){
       if($arr[$f][$c+1]=="T"){
           if($arr[$f][$c+2]=="T"){
            if($arr[$f][$c+3]=="T"){
              $th=$th+1;
                
            }   
           }
       }
          }
    //Verticales **Invertimos filas * Columnas
    if(($arr[$c][$f])=="A"){
        if($arr[$c+1][$f]=="A"){
            if($arr[$c+2][$f]=="A"){
             if($arr[$c+3][$f]=="A"){
               $av=$av+1;
                 
             }   
            }
        }
           }
           if(($arr[$c][$f])=="C"){
            if($arr[$c+1][$f]=="C"){
                if($arr[$c+2][$f]=="C"){
                 if($arr[$c+3][$f]=="C"){
                   $cv=$cv+1;
                     
                 }   
                }
            }
               }
               if(($arr[$c][$f])=="G"){
                if($arr[$c+1][$f]=="G"){
                    if($arr[$c+2][$f]=="G"){
                     if($arr[$c+3][$f]=="G"){
                       $gv=$gv+1;
                         
                     }   
                    }
                }
                   }
                   if(($arr[$c][$f])=="T"){
                    if($arr[$c+1][$f]=="T"){
                        if($arr[$c+2][$f]=="T"){
                         if($arr[$c+3][$f]=="T"){
                           $tv=$tv+1;
                             
                         }   
                        }
                    }
    }
}
    }
     $conn = mysqli_connect("31.170.166.166", "u888399958_adn", "123456Adn", "u888399958_adn");
if (!$conn) {
   echo "no conecto";}
   $sql = "INSERT INTO adn_table (adn) VALUES ('$adn')";
   mysqli_query($conn, $sql);
    $res = $ad+$cd+$gd+$td+$ah+$ch+$gh+$th+$av+$cv+$gv+$tv;
    echo $res;
    if($res>1){return 1;}else{return 0;}
   
}


?>