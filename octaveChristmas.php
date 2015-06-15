<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function octaveOfChristmas ($info)
    {
        $dates = array();


        $cal      = new Calendary($info->getChristmas());
        $key      = 'Christmas';
        $cal->setLiteralDay('Christmas');
        $cal->setRank('SOLEMNITY');
        $cal->setLiturgicalWeek(1);
        $cal->setLiturgicalColor('GOLD');
        $cal->setLiturgicalSeason('CHRISTMAS');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle((($cal->getYear()+1) - 1963) % 3);
        $cal->setWeekdayCycle((($cal->getYear()+1) % 2));            

        $dates[$key] = array
        (
            $info->getChristmas(),
            $cal
        );            

        $loopDate = strtotime ('+1 day', $info->getChristmas());
        $endLoopDate = mktime (0,0,0,12,31, $info->getYear());

        $ctr = 1;
        $saveKey = NULL;

        while ( $loopDate <= $endLoopDate)
        {

            $cal      = new Calendary($loopDate);
            $key      = 'the'.ordinalNumbers($ctr).'DayOfTheOctaveOfChristmas';

            if ($cal->getDayOfWeek() == 0)
                $saveKey = $key;

            $cal->setLiteralDay('The '.ordinalNumbers($ctr).' day of the Octave of Christmas');
            $cal->setRank('WEEKDAY');
            $cal->setLiturgicalWeek(1);
            $cal->setLiturgicalColor('WHITE');
            $cal->setLiturgicalSeason('CHRISTMAS');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle((($cal->getYear()+1) - 1963) % 3);
            $cal->setWeekdayCycle((($cal->getYear()+1) % 2));            

            $dates[$key] = array
            (
                $loopDate,
                $cal
            );            
            $ctr++;
            $loopDate = strtotime ("+1 day", $loopDate);
        }
        // If Christmas is on a Sunday, Holy Family will be on 30th

    

        if ( $dates['Christmas'][1]->getDayOfWeek() == 0 )
        {
            $timeToSearch = mktime (0,0,0,12,30, $info->getYear());
        }
        else
        {
            $timeToSearch = strtotime('+'.(int)(7-$dates['Christmas'][1]->getDayOfWeek()).' days', $info->getChristmas());
        }
        $arrayResult = array_column($dates, 0);
        $position = array_search($timeToSearch, $arrayResult);
        $arrayKeys = array_keys($dates);
        $dates = replaceKey($dates,$arrayKeys[$position], 'holyFamily' );
        $dates['holyFamily'][1]->setRank('FEAST_OF_THE_LORD');
        $dates['holyFamily'][1]->setLiteralDay('Holy Family');
        
    return ($dates);
    }
