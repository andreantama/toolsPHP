<?php
function filterArray($search, $array){ 
        $found = []; 
        foreach ($array as $key => $val) { 
            $i = 0;
                if(preg_match($search, $val['deposit'])){ 
                    $i++;
                } 
                if(preg_match($search, $val['depositEnvelopeId'])){ 
                    $i++;
                } 
                if(preg_match($search, $val['manager'])){ 
                    $i++;
                } 
                if($i != 0){
                    $found[] = [
                        "depositEnvelopeId" => $val["depositEnvelopeId"],
                        "deposit" => $val["deposit"],
                        "manager" => $val["manager"],
                    ]; 
                }
     
        } 
        return $found; 
    } 

    //$data is array variable
    if($this->search != "" && $this->search != "null"){
        $a = $this->search;
        $data = $this->filterArray("/$a/i", $data, 0); 
    }
    var_dump($data);
?>