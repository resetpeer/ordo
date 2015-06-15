<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function seasonOfAdvent ($info)
    {

        $dates = array();
        $sundays = 0;
        $currentWeek = 0;
        $ctr = 0;
        
        $loopDate = $info->getStartAdvent();
        
        while ( $loopDate < $info->getChristmas())
        {

            $cal      = new Calendary($loopDate);
            $cal->setLiturgicalWeek($currentWeek+1);
            $cal->setLiturgicalColor('PURPLE');
            $cal->setLiturgicalSeason('ADVENT');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle((($cal->getYear()+1) - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear()+1) % 2);
            
            switch ($cal->getDayOfWeek())
            {            
                case 0:
                    $key = 'the'.ordinalNumbers($sundays).'SundayOfAdvent';
                    $cal->setLiteralDay ('The '.ordinalNumbers($sundays).' Sunday of Advent');
                    $cal->setRank('SUNDAY_OF_ADVENT');
                    if ($sundays == 2)
                        $cal->setLiturgicalColor('ROSE');
//                    $currentWeek++;
                    $sundays++;
                    break;
                default:
                    $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers($currentWeek).'WeekOfAdvent';
                    $cal->setLiteralDay ($cal->getLiteralDow().' of the '.ordinalNumbers($currentWeek).' week of Advent');
                    $cal->setRank('WEEKDAY_OF_ADVENT');
                    break;	 
            }
            
            $dates[$key] = array
            (
                $loopDate,
                $cal
            ); 
            
            $ctr++;
            if ( $ctr % 7 === 0 )
                $currentWeek++;
            
            $loopDate = strtotime('+1 day', $loopDate);
        }

        
   //*******************************************************************************        
        
        $arrayResult = array_column($dates, 0);
        $arrayKeys = array_keys($dates);

        $timeToSearch = mktime(0,0,0,12,8,$info->getYear());
        $position = array_search($timeToSearch, $arrayResult);
        if ($dates[$arrayKeys[$position]][1]->getDayOfWeek() == 0)
        {
            $timeToSearch = mktime(0,0,0,12,9,$info->getYear());
        }

        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'immaculateConception' );
        $dates['immaculateConception'][1]->setRank('SOLEMNITY');
        $dates['immaculateConception'][1]->setLiteralDay('Immaculate Conception');           
        $dates['immaculateConception'][1]->setLiturgicalColor('WHITE');           

//*******************************************************************************        
     
        
        return ($dates);
    }
