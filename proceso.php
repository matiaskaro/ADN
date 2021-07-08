
<?php
//******Programa principal******
$sum =0;
$x=0;
//Recibo Datos
$adn = $_POST["adn"];
$tam = strlen($adn);
//Separaciòn
$dna=str_split($adn);
$resul = isForceUser($dna);
if($resul==0){echo "False";}
else{echo "True";}
echo $resul;
//*****Mètodo ********/
function isForceUser($dna){
//Cantidad de caracteres
global $tam;
global $adn;

for($i=0;$i<$tam;$i++){
if($dna[$i]==" "){
break;}
}
$tamf= $i;
$tamc=$i;
//Asignacion a Matriz
for($f=0;$f<$tam;$f++){
        for($c=0;$c<$tam;$c++){
       $dn[$c] = trim($dna[$c]);
       $arr[$f][$c] = $dn[$c];
    }
    }
    
for($f=0;$f<$tamf;$f++){
    for($c=0;$c<$tamc;$c++){
    //Diagonal principal    
        if($f==$c){
        if(($arr[$f][$c])=='A'){
            $ad=$ad+1;
            if($ad>=4){$res++;}
        }
        if(($arr[$f][$c])=='C'){
            $cd=$cd+1;
            if($cd>=4){$res++;}
        }
        if(($arr[$f][$c])=='G'){
            $gd=$gd+1;
            if($gd>=4){$res++;}
        }
        if(($arr[$f][$c])=='T'){
            $td=$td+1;
            if($td>=4){$res++;}
        }
    }
    //Horizontales
    if(($arr[$f][$c])=="A"){
        $ah=$ah+1;
        if($ah>=4){$res++;}
    }
    if(($arr[$f][$c])=='C'){
        $ch=$ch+1;
        if($ch>=4){$res++;}
    }
    if(($arr[$f][$c])=='G'){
        $gh=$gh+1;
        if($gh>=4){$res++;}
    }
    if(($arr[$f][$c])=='T'){
        $th=$th+1;
        if($th>=4){$res++;}
    }
    //Verticales **Invertimos filas * Columnas
    if(($arr[$c][$f])=='A'){
        $av=$av+1;
        if($av>=4){$res++;}
    }
    if(($arr[$c][$f])=='C'){
        $cv=$cv+1;
        if($cv>=4){$res++;}
    }
    if(($arr[$c][$f])=='G'){
        $gv=$gv+1;
        if($gv>=4){$res++;}
    }
    if(($arr[$c][$f])=='T'){
        $tv=$tv+1;
        if($tv>=4){$res++;}
    }
    }
   
}
if($res>1){return 1;}else{return 0;}

}

?>