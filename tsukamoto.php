<?php

$data = array(
        "Timur"     => ["Senin" => 172,   "Selasa" => 168,    "Rabu" => 169,    "Kamis" => 163,    "Jumat" => 164],
        "Selatan"   => ["Senin" => 157,   "Selasa" => 153,    "Rabu" => 159,    "Kamis" => 152,    "Jumat" => 159],
        "Barat"     => ["Senin" => 44,    "Selasa" => 37,     "Rabu" => 40,     "Kamis" => 42,     "Jumat" => 37],
        "Utara"     => ["Senin" => 71,    "Selasa" => 75,     "Rabu" => 73,     "Kamis" => 75,     "Jumat" => 75],
    );

function Hari($hari) {
    global $data;

    $result = [];
    foreach($data as $arah => $haris) {
        foreach($haris as $key => $value) {
            if($hari == $key) {
                $result[$arah] = $value;
            }
        }
    }
    return $result;
}

// die(var_dump($data));

// $hari = Hari("Senin");
// die(var_dump($hari));

function RangeSetPadat() {
    $senin = Hari("Senin");
    $selasa = Hari("Selasa");
    $rabu = Hari("Rabu");
    $kamis = Hari("Kamis");
    $jumat = Hari("Jumat");

    $min = $max = $mid = 0;
    $haris = array(
        "Senin" => $senin, 
        "Selasa" => $selasa, 
        "Rabu" => $rabu, 
        "Kamis" => $kamis, 
        "Jumat" => $jumat,
        );

    // die(var_dump($haris));
    $result = [];    
    foreach($haris as $hari => $arah) {
        $max = max($arah);
        $min = min($arah);
        $mid = ((($max - $min) / 2) + $min);

        $valHari = [
            "max" => $max,
            "min" => $min,
            "mid" => ceil($mid),
        ];            
        $result[$hari] = $valHari;
    }

    return $result;
}

// $range = RangeSetPadat();
// die(var_dump($range));

function AlphaTidakPadat($input) {
    $range = RangeSetPadat();

    $result = [];
    foreach($range as $haris => $hari) {
        if($input <= $hari["min"]) {
            $result[$haris] = 1;
        } else if($hari["min"] < $input && $input < $hari["mid"]) {
            $result[$haris] = ($hari["mid"] - $input) / ($hari["mid"] - $hari["min"]);
        } else if($input >= $hari["mid"]) {
            $result[$haris] = 0;
        }
    }
    return $result;
}

// $tidak = AlphaTidakPadat(90);
// die(var_dump($tidak));

function AlphaSedang($input) {
    $range = RangeSetPadat(); 

    $result = [];
    foreach($range as $haris => $hari) {
        if($input == $hari["mid"]) {                
            $result[$haris] = 1;
        } else if($hari["min"] < $input && $input < $hari["mid"]) {
            $result[$haris] = ($input - $hari["min"]) / ($hari["mid"] - $hari["min"]);
        } else if($hari["mid"] < $input && $input < $hari["max"]) {
            $result[$haris] = ($hari["max"] - $input) / ($hari["max"] - $hari["mid"]);
        } else if($input <= $hari["min"] || $hari["max"] >= $input) {
            $result[$haris] = 0;
        }
    }
    return $result;
}

// $sedang = AlphaSedang(108);
// die(var_dump($sedang));

function AlphaPadat($input) {
    $range = RangeSetPadat();

    $result = [];
    foreach($range as $haris => $hari) {
        if($input >= $hari["max"]) {
            $result[$haris] = 1;
        } else if($hari["mid"] < $input && $input < $hari["max"]) {
            $result[$haris] = ($input - $hari["mid"]) / ($hari["max"] - $hari["mid"]);
        } else if($hari["mid"] >= $input) {
            $result[$haris] = 0;
        }
    }
    return $result;
}

// $padat = AlphaPadat(108);
// die(var_dump($padat));

function checkKepadatanJalur($jalur) {
    $range = RangeSetPadat();

    $result = [];    
    foreach($range as $haris => $hari) {
        if($jalur <= $hari["min"]) {
            $result = "Tidak Padat";
        } else if($jalur > $hari["min"] && $jalur < $hari["mid"]) {
            $x = $jalur - $hari["min"];
            $y = $hari["mid"] - $jalur;
            if($x < $y) {
                $result = "Tidak Padat";
            } else {
                $result = "Sedang";
            }
        } else if($jalur == $hari["mid"]) {
            $result = "Sedang";            
        } else if($jalur > $hari["mid"] && $jalur < $hari["max"]) {
            $x = $jalur - $hari["mid"];
            $y = $hari["max"] - $jalur;
            if($x < $y) {
                $result = "Sedang";                
            } else {
                $result = "Sedang";
            }
        } else if($jalur >= $hari["max"]) {
             $result = "Padat";
        }
    }
    return $result;
}

// $check = checkKepadatanJalur(700);
// die(var_dump($check));

function zCepat($ap) { 
    $lamaMid = 82;
    $lamaMin = 44;

    foreach($ap as $haris => $value) { 
        // die(var_dump($ap)); 
        $z = $lamaMid - ($value * ($lamaMid - $lamaMin));
        // Output Lama
        $result[$haris] = ceil(($value * $z) / $value);
    }
    return $result;
}

function zSedangCepat($ap) {
    $lamaMid = 82;
    $lamaMin = 44;

    foreach($ap as $haris => $value) {
        $z = ($value * ($lamaMid - $lamaMin)) + $lamaMin;
        // Output Lama
        $result[$haris] = ceil(($value * $z) / $value);
    }

    return $result;
}

function zSedangLama($ap) {
    $lamaMid = 82;
    $lamaMax = 120;

    foreach($ap as $haris => $value) {
        $z = $lamaMax - ($value * ($lamaMax - $lamaMid));
        // Output Lama
        $result[$haris] = ceil(($value * $z) / $value);
    }

    return $result;
}

function zLama($ap) { 
    $lamaMid = 82;
    $lamaMax = 120;

    foreach($ap as $haris => $value) {
        $z = ($value * ($lamaMax - $lamaMid)) + $lamaMid;
        // Output Lama
        $result[$haris] = ceil(($value * $z) / $value);
    }

    return $result;   
}

function Rule($jalur1, $jalur2, $jalur3, $jalur4) {
    $j1 = checkKepadatanJalur($jalur1);
    $j2 = checkKepadatanJalur($jalur2);
    $j3 = checkKepadatanJalur($jalur3);
    $j4 = checkKepadatanJalur($jalur4);

    $range = RangeSetPadat();
    // die(var_dump($j1));

    foreach($range as $haris) {
        // Rule 1
        if($j1 == "Tidak Padat") {
            $ap = AlphaTidakPadat($jalur1);
            $lama = zCepat($ap);
        }

        // Rule 2
        if($j1 == "Sedang") {
            if($j2 == "Tidak Padat") {
                if($j3 == "Tidak Padat") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaSedang($jalur1);
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama); 
                    } else if($j4 == "Sedang") {
                        $ap = AlphaSedang($jalur1);                            
                        $lama = zCepat($ap);
                    } else if($j4 == "Padat") {
                        $ap = AlphaSedang($jalur1);                            
                        $lama = zCepat($ap);                            
                    }
                } else if($j3 == "Sedang") {
                    $ap = AlphaSedang($jalur1);                        
                    $lama = zCepat($ap);                        
                } else if($j3 == "Padat") {
                    $ap = AlphaSedang($jalur1);                        
                    $lama = zCepat($ap);                        
                } 
            } else if($j2 == "Sedang") {
                $ap = AlphaSedang($jalur1);                    
                $lama = zCepat($ap);                    
            } else if($j2 == "Padat") {
                $ap = AlphaSedang($jalur1);                    
                $lama = zCepat($ap);
            }          
        }

        // Rule 3
        if($j1 == "Padat") {
            if($j2 == "Tidak Padat") {
                if($j3 == "Tidak Padat") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaPadat($jalur1);                            
                        $lama = zLama($ap);                           
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lama = zLama($ap);                                                       
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                    
                    }
                } else if($j3 == "Sedang") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lama = zLama($ap);                                                       
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                   
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lama = zCepat($ap);                                                                                   
                    }                                                               
                } else if($j3 == "Padat") {
                    if($j4 == "Tidak Padat"){
                        $ap = AlphaPadat($jalur1);                                                        
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                   
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);                                                        
                        $lama = zCepat($ap);
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);                                                      
                        $lama = zCepat($ap);
                    }                                                                              
                } // 3 Padat
            } else if($j2 == "Sedang") {
                if($j3 == "Tidak Padat") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaPadat($jalur1);                                                      
                        $lama = zLama($ap);
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);                                                      
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                   
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);
                        $lama = zCepat($ap);
                    }
                } else if($j3 == "Sedang") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaPadat($jalur1);                                                      
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                   
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);                                                      
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);                                                                                   
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);
                        $lama = zCepat($ap);
                    }
                } else if($j3 == "Padat") {
                    $ap = AlphaPadat($jalur1);
                    $lama = zCepat($ap);
                }                                                             
            } else if($j2 == "Padat") {
                if($j3 == "Tidak Padat") {
                    if($j4 == "Tidak Padat") {
                        $ap = AlphaPadat($jalur1);     
                        $lamaSedangCepat = zSedangCepat($ap);
                        $lamaSedangLama = zSedangLama($ap);
                        $lama = max($lamaSedangCepat, $lamaSedangLama);  
                                // die(var_dump($result[$haris]));
                    } else if($j4 == "Sedang") {
                        $ap = AlphaPadat($jalur1);
                        $lama = zCepat($ap);
                    } else if($j4 == "Padat") {
                        $ap = AlphaPadat($jalur1);
                        $lama = zCepat($ap);
                    }
                }  else if($j3 == "Padat") {
                    $ap = AlphaPadat($jalur1);
                    $lama = zCepat($ap);
                }                                                                                              
            }
        }
    }    
    return $lama;
}
  

// $padat = zLama(120);
// die(var_dump($padat));