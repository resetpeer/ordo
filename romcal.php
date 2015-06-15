<?php
    require 'yearInfo.php';
    require 'utils.php';
    require 'lent.php';
    require 'calendary.php';
    require 'easter.php';
    require 'advent.php';
    require 'octaveChristmas.php';
    require 'ordinary.php';
    require 'christmas.php';
    require 'generalCalendar.php';

    
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function romcal ($year, $ascensionIsSunday, $epiphanyIsSix, $corpusChristiIsThur)
    {
        $info = new yearInfo($year,$ascensionIsSunday, $epiphanyIsSix, $corpusChristiIsThur );
        $lentSeason = seasonOfLent ($info);
        $easterSeason = seasonOfEaster($info);
        $adventSeason = seasonOfAdvent($info);
        $octaveOfChristmas = octaveOfChristmas($info);
        $ordinaryHigh = seasonHighOdinary ($info);
        
        $resume = $ordinaryHigh[array_keys($ordinaryHigh)[0]][1]->getLiturgicalWeek();        
        
        $ordinaryLow = seasonLowOdinary ($info, $resume);
        
        $endTime = $ordinaryLow[array_keys($ordinaryLow)[0]][0];        
        
        $christmasSeason = seasonOfChristmas($info, $endTime);

        $arrayResult = $christmasSeason + $ordinaryLow + $lentSeason + 
                        $easterSeason +$ordinaryHigh + $adventSeason + $octaveOfChristmas;

        
   //*******************************************************************************        
        
        $arrayCols = array_column($arrayResult, 0);
        $arrayKeys = array_keys($arrayResult);

        $timeToSearch = mktime(0,0,0,3,25,$info->getYear());
        $position = array_search($timeToSearch, $arrayCols);
        if ($arrayResult[$arrayKeys[$position]][0] == $info->getPalmSunday())
        {
            $timeToSearch = strtotime ('-1 day', $info->getPalmSunday());
            $position = array_search($timeToSearch, $arrayCols);
        }
        elseif ($arrayResult[$arrayKeys[$position]][0] > $info->getPalmSunday() && 
            $arrayResult[$arrayKeys[$position]][0] <  $info->getEaster())
        {
            $timeToSearch = strtotime ('+1 day', $arrayResult['divineMercySunday'][0]);
            $position = array_search($timeToSearch, $arrayCols);
        }
        elseif ($arrayResult[$arrayKeys[$position]][1]->getDayOfWeek() == 0)
        {
            $timeToSearch = strtotime ('+1 day', $timeToSearch);
            $position = array_search($timeToSearch, $arrayCols);
        }
        
        $arrayResult = replaceKey($arrayResult,$arrayKeys[$position], 'annunciation' );
        $arrayResult['annunciation'][1]->setRank('SOLEMNITY');
        $arrayResult['annunciation'][1]->setLiteralDay('Annunciation');           
        $arrayResult['annunciation'][1]->setLiturgicalColor('WHITE');           

//*******************************************************************************          
        
        setGeneralCalendar( $info, $arrayResult);
        
        
	$file = 'dump.txt';
	$handle = fopen($file, 'w');


        foreach ($arrayResult as $key => $value ) 
        {			
            fwrite($handle, '<*************************************************************>'.PHP_EOL);
            fwrite($handle, '<*************************************************************>'.PHP_EOL);
            $results = print_r($key, true); 
            fwrite($handle, $results.PHP_EOL);
            fwrite($handle, '<*************************************************************>'.PHP_EOL);
            $results = print_r($value, true);
            fwrite($handle, $results.PHP_EOL);
 //           $results = print_r($liturgicalDates[$resolvedEvents[$i]], true); 
 //           fwrite($handle, $results);

            fwrite($handle, '<*************************************************************>'.PHP_EOL);
            fwrite($handle, '<*************************************************************>'.PHP_EOL);

        }
        
        fclose ($handle);
    }
