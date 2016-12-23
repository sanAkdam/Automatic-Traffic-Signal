<?php
    $timur = $selatan = $utara = $barat = 0;

    foreach($arahs as $arah) {
        foreach($arah as $key => $value) {
            if(key($arahs) == "Timur") {
                $timur = $value;
            }
            if(key($arahs) == "Utara") {
                $utara = $value;
            }
            if(key($arahs) == "Barat") {
                $barat = $value;
            }
            if(key($arahs) == "Selatan") {
                $selatan = $value;
            }
        }
        next($arahs);        
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="src/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="src/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>    
        <script src="src/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>    
        <script src="src/countdown.min.js"></script>
    <style type="text/css">
       .lamp {
            height: 30px;
            width: 30px;
            border-style: solid;
            border-width: 2px;
            border-radius: 25px;
        }
        .lamptRed {
            background-color: red;
        }
        .lamptYellow {
            background-color: yellow;
        }
        .lamptGreen {
            background-color: green;
        }
        .lampuRed {
            background-color: red;
        }
        .lampuYellow {
            background-color: yellow;
        }
        .lampuGreen {
            background-color: green;
        }
        .lampsRed {
            background-color: red;
        }
        .lampsYellow {
            background-color: yellow;
        }
        .lampsGreen {
            background-color: green;
        }
        .lampbRed {
            background-color: red;
        }
        .lampbYellow {
            background-color: yellow;
        }
        .lampbGreen {
            background-color: green;
        }
    </style>
    </head>
    <body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group">
                <table class="table">
                    <th>
                        <input type="text" name="timur1" class="form-control" placeholder="Atas">
                        <input type="text" name="timur2" class="form-control" placeholder="Kiri">
                        <input type="text" name="timur3" class="form-control" placeholder="Bawah">
                        <input type="text" name="timur4" class="form-control" placeholder="Kanan">
                    </th>
                    <th>
                        <input type="text" name="selatan1" class="form-control" placeholder="Kiri">
                        <input type="text" name="selatan2" class="form-control" placeholder="Bawah">
                        <input type="text" name="selatan3" class="form-control" placeholder="Kanan">
                        <input type="text" name="selatan4" class="form-control" placeholder="Atas">                        
                    </th>
                    <th>
                        <input type="text" name="barat1" class="form-control" placeholder="Bawah">
                        <input type="text" name="barat2" class="form-control" placeholder="Kanan">
                        <input type="text" name="barat3" class="form-control" placeholder="Atas">
                        <input type="text" name="barat4" class="form-control" placeholder="Kiri">
                    </th>
                    <th>
                        <input type="text" name="utara1" class="form-control" placeholder="Kanan">
                        <input type="text" name="utara2" class="form-control" placeholder="Atas">
                        <input type="text" name="utara3" class="form-control" placeholder="Kiri">
                        <input type="text" name="utara4" class="form-control" placeholder="Bawah">
                    </th>
                    <th>
                        <input type="text" name="hari" class="form-control" placeholder="Hari">                
                        <hr>
                        <button type="submit" class="btn btn-danger form-control">D E M O</button>                                                
                    </th>
                </table>                
            </div>
        </form>

        <hr>

        <div class="form-group">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center"><h1>[ <?php echo $timur ?> ]</h1></div>    
                <div class="col-sm-4"></div>                            
            </div>
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <img class="lamp" id="tRed">
                    <img class="lamp" id="tYellow">
                    <img class="lamp" id="tGreen">
                </div>    
                <div class="col-sm-4"></div>                            
            </div>
            <div class="row">
                <div class="col-sm-4 text-center"><h1>[ <?php echo $selatan ?> ]</h1></div>                
                <div class="col-sm-4 text-center" id="trafficLight"><h1>DEMO</h1></div>                                
                <div class="col-sm-4 text-center"><h1>[ <?php echo $utara ?> ]</h1></div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4">
                    <img class="lamp" id="sRed">
                    <img class="lamp" id="sYellow">
                    <img class="lamp" id="sGreen">
                </div>    
                <div class="col-sm-4"></div> 
                <div class="col-sm-4">
                    <img class="lamp" id="uRed">
                    <img class="lamp" id="uYellow">
                    <img class="lamp" id="uGreen">
                </div>                            
            </div>
            <div class="row" style="margin-top: 50px;">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center"><h1>[ <?php echo $barat ?> ]</h1></div>                
                <div class="col-sm-4"></div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <img class="lamp" id="bRed">
                    <img class="lamp" id="bYellow">
                    <img class="lamp" id="bGreen">
                </div>    
                <div class="col-sm-4"></div>                            
            </div>
        </div>      
    </div>

    <script type="text/javascript">
        // Hijau
        var timurHijau = <?php echo $timur; ?>;
        var selatanHijau = <?php echo $selatan; ?>;
        var baratHijau = <?php echo $barat; ?>;
        var utaraHijau = <?php echo $utara; ?>;
        
        // Merah
        var timurMerah = utaraHijau;
        var selatanMerah = timurHijau;
        var baratMerah = selatanHijau;
        var utaraMerah = baratMerah;
        var count = 0;

        var changeStateTimur = (function () {
            var state = 0,
                lamps = ["tRed", "tYellow", "tGreen"],
                lampsLength = lamps.length,
                order = [
                    [timurMerah * 100, "tRed"],
                    [2000, "tRed", "tYellow"],
                    [timurHijau * 100, "tGreen"],
                    [2000, "tYellow"],
                ],
                orderLength = order.length,
                lampIndex,
                orderIndex,
                sId;

            return function (stop) {
                if (stop) {
                    clearTimeout(sId);
                    return;
                }

                var lamp,
                lampDOM;
                count++;                                                                          

                for (lampIndex = 0; lampIndex < lampsLength; lampIndex += 1) {
                    lamp = lamps[lampIndex];
                    lampDOM = document.getElementById(lamp);
                    if (order[state].indexOf(lamp) !== -1) {
                        console.log(count);
                        if (count == 5) {          
                            lampDOM.classList.add("lamp" + lamp);                                                                          
                            changeStateUtara(false);
                        } else if(count > 5) {
                            lampDOM.classList.add("lamp" + lamp);
                            return;
                        } else {
                            lampDOM.classList.add("lamp" + lamp);                            
                        } 
                    } else {                        
                        lampDOM.classList.remove("lamp" + lamp);
                    }
                }

                sId = setTimeout(changeStateTimur, order[state][0]);
                state += 1;
                if (state >= orderLength) {
                    state = 0;
                }
            };
        }());

        var changeStateUtara = (function () {
            var state = 0,
                lamps = ["uRed", "uYellow", "uGreen"],
                lampsLength = lamps.length,
                order = [
                    [2000, "uYellow"],
                    [utaraHijau * 100, "uGreen"],                    
                    [2000, "uGreen", "uYellow"],
                    [2000, "uRed"],
                    [utaraMerah * 100, "uRed"],
                ],
                orderLength = order.length,
                lampIndex,
                orderIndex,
                sId;

            return function (stop) {
                if (stop) {
                    clearTimeout(sId);
                    return;
                }

                var lamp,
                lampDOM;
                count++;                                                                                          


                for (lampIndex = 0; lampIndex < lampsLength; lampIndex += 1) {
                    lamp = lamps[lampIndex];
                    lampDOM = document.getElementById(lamp);
                    if (order[state].indexOf(lamp) !== -1) {
                         console.log(count);
                        if (count == 10) {     
                            lampDOM.classList.add("lamp" + lamp);                                                                                                         
                        } else if(count > 10) {
                            lampDOM.classList.add("lamp" + lamp);                            
                            changeStateBarat(false);                            
                            return;
                        } else {
                            lampDOM.classList.add("lamp" + lamp);                            
                        } 
                    } else {
                        lampDOM.classList.remove("lamp" + lamp);
                    }                                       
                }

                sId = setTimeout(changeStateUtara, order[state][0]);
                state += 1;
                if (state >= orderLength) {
                    state = 0;
                }
            };
        }());

        var changeStateBarat = (function () {
            var state = 0,
                lamps = ["bRed", "bYellow", "bGreen"],
                lampsLength = lamps.length,
                order = [
                    [2000, "bYellow"],
                    [baratHijau * 100, "bGreen"],                    
                    [2000, "bGreen", "bYellow"],
                    [2000, "bRed"],
                    [baratMerah * 100, "bRed"],
                ],
                orderLength = order.length,
                lampIndex,
                orderIndex,
                sId;

            return function (stop) {
                if (stop) {
                    clearTimeout(sId);
                    return;
                }

                var lamp,
                lampDOM;
                count++;                                                                                                          


                for (lampIndex = 0; lampIndex < lampsLength; lampIndex += 1) {
                    lamp = lamps[lampIndex];
                    lampDOM = document.getElementById(lamp);
                    if (order[state].indexOf(lamp) !== -1) {
                        if (count == 15) {     
                            lampDOM.classList.add("lamp" + lamp);                                                                                                         
                        } else if(count > 15) {
                            lampDOM.classList.add("lamp" + lamp);                            
                            changeStateSelatan(false);                            
                            return;
                        } else {
                            lampDOM.classList.add("lamp" + lamp);                            
                        } 
                    } else {
                        lampDOM.classList.remove("lamp" + lamp);
                    }                                       
                }

                sId = setTimeout(changeStateBarat, order[state][0]);
                state += 1;
                if (state >= orderLength) {
                    state = 0;
                }
            };
        }());

        var changeStateSelatan = (function () {
            var state = 0,
                lamps = ["sRed", "sYellow", "sGreen"],
                lampsLength = lamps.length,
                order = [
                    [2000, "sYellow"],
                    [selatanHijau * 100, "sGreen"],                    
                    [2000, "sGreen", "sYellow"],
                    [2000, "sRed"],
                    [selatanMerah * 100, "sRed"],
                ],
                orderLength = order.length,
                lampIndex,
                orderIndex,
                sId;

            return function (stop) {
                if (stop) {
                    clearTimeout(sId);
                    return;
                }

                var lamp,
                lampDOM;
                count++;                                                                                          

                for (lampIndex = 0; lampIndex < lampsLength; lampIndex += 1) {
                    lamp = lamps[lampIndex];
                    lampDOM = document.getElementById(lamp);
                    if (order[state].indexOf(lamp) !== -1) {
                        if (count == 20) {     
                            lampDOM.classList.add("lamp" + lamp);                                                                                                         
                        } else if(count > 20) {
                            lampDOM.classList.add("lamp" + lamp);
                            return;
                        } else {
                            lampDOM.classList.add("lamp" + lamp);                            
                        } 
                    } else {
                        lampDOM.classList.remove("lamp" + lamp);
                    }                                       
                }

                sId = setTimeout(changeStateSelatan, order[state][0]);
                state += 1;
                if (state >= orderLength) {
                    state = 0;
                }
            };
        }());

        document.getElementById("trafficLight").addEventListener("click", (function () {
            var state = false;
            
            return function () {
                changeStateTimur(state);
                state = !state;
            };
        }()), false);
    </script>

    </body>
</html>