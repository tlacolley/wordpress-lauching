<?php
function diff_time_stamp($from, $to){



    // $years   = floor($diff / (365*60*60*24));
    // $months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    // $days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    // $hours   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
    // $minuts  = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);
    // $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minuts*60));

    $diff = abs($to - $from);


    $mins = $diff / 60;
    $hours = $mins / 60;
    $days = $hours / 24;
    $months = $days / 30;
    $years = $months / 12;



    $seconds = floor($diff % 60);
    $minuts = floor($mins % 60);
    $hours = floor($hours % 24);
    $days = floor($days%30);
    $months = floor($months%12);
    $years = floor($diff / (365*60*60*24));


    $result = "";
    // print $days;
    // print $hours;
    // print $mins;
    if ($years > 0) {
        if ($years == 1) {
            $result += "".$years."year" ;
            if($months > 0 ){
                if ($months == 1) {
                    $result .= " ".$months."month";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }
                else{
                    $result .= " ".$months."months";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }

            }

        }
        else{
            $result .=  "".$years."years" ;
            if($months > 0 ){
                if ($months == 1) {
                    $result .= " ".$months."month";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }
                else{
                    $result .= " ".$months."months";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }

            }

        }
        // var_dump( $years);
    }
    else{
            if($months > 0 ){
                if ($months == 1) {
                    $result .= " ".$months."month";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }
                else{
                    $result .= " ".$months."months";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }

            }


        else{

            if($months > 0 ){
                if ($months == 1) {
                    $result .= " ".$months."month";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }
                else{
                    $result .= " ".$months."months";
                    if($hours > 0 ){
                        if ($hours == 1) {
                            $result .= " ".$hours."hour";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }
                        else{
                            $result .= " ".$hours."hours";
                            if($minuts > 0 ){
                                if ($minuts == 1) {
                                    $result .= " ".$minuts."minut";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }
                                else{
                                    $result .= " ".$minuts."minuts";
                                    if($seconds > 0 ){
                                        if ($seconds == 1) {
                                            $result .= " ".$seconds."second";
                                        }
                                        else{
                                            $result .= " ".$seconds."seconds";
                                        }
                                }
                            }

                            }
                        }

                    }

                }

            }

        }
    }







    printf($result);

};



 ?>
