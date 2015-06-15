<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function seasonHighOdinary ($info )
    {
        
        $dates = array();
        $startAdvent = $info->getStartAdvent();
        $startDate = strtotime('-1 day', $startAdvent);
        $endDate = strtotime('-7 day', $startAdvent);

        while ($startDate > $endDate)
        {

            
            $cal      = new Calendary($startDate);
            $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers(33).'WeekOfOrdinaryTime';
            $cal->setLiteralDay($cal->getLiteralDow().' of the '.ordinalNumbers(33).' week of Ordinary Time');
            $cal->setRank('WEEKDAY');
            $cal->setLiturgicalWeek(34);
            $cal->setLiturgicalColor('GREEN');
            $cal->setLiturgicalSeason('OT');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear() % 2));              
            
            $dates[$key] = array
            (
                $startDate,
                $cal
            ); 
            $startDate = strtotime('-1 day', $startDate);

        }

        $startDate = strtotime('-7 day', $startAdvent);        

        $cal      = new Calendary($startDate);
        $key = 'christTheKing';
        $cal->setLiteralDay('Christ the King of the Universe');
        $cal->setRank('SOLEMNITY');
        $cal->setLiturgicalWeek(34);
        $cal->setLiturgicalColor('WHITE');
        $cal->setLiturgicalSeason('OT');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle(($cal->getYear() % 2));              

        $dates[$key] = array
        (
            $startDate,
            $cal
        ); 
        

        $startDate = strtotime('-8 day', $startAdvent);
        $endDate = $info->getPentecostSunday();

        $weekOfOrdinaryTime = 32;
        $counter = 0;

        while ($startDate > $endDate)
        {
            $cal = new Calendary($startDate);

            if ( $cal->getDayOfWeek() == 0 ) 
            { // Sunday
                $key = 'the'.ordinalNumbers($weekOfOrdinaryTime).'SundayOfOrdinaryTime';
                $cal->setLiteralDay('The '.ordinalNumbers($weekOfOrdinaryTime).' Sunday of Ordinary Time');
                $cal->setRank('SUNDAY');
                $cal->setLiturgicalWeek($weekOfOrdinaryTime + 1);
                $weekOfOrdinaryTime--;
            }
            else
            {

                $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers($weekOfOrdinaryTime).'WeekOfOrdinaryTime';
                $cal->setLiteralDay($cal->getLiteralDow().' of the '.ordinalNumbers($weekOfOrdinaryTime).' week of Ordinary Time');
                $cal->setRank('WEEKDAY');
                $cal->setLiturgicalWeek($weekOfOrdinaryTime + 1);
            }	
            
            $cal->setLiturgicalColor('GREEN');
            $cal->setLiturgicalSeason('OT');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear() % 2));              
            
            $dates[$key] = array
            (
                $startDate,
                $cal
            );             
            
            $startDate = strtotime('-1 day', $startDate);

        }

        $dates = sortArray($dates);

//*******************************************************************************        
        $arrayResult = array_column($dates, 0);
        $arrayKeys = array_keys($dates);
        $timeToSearch = strtotime('+7 days', $info->getPentecostSunday());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'trinitySunday' );
        $dates['trinitySunday'][1]->setRank('SOLEMNITY');
        $dates['trinitySunday'][1]->setLiteralDay('Trinity Sunday');           
        $dates['trinitySunday'][1]->setLiturgicalColor('WHITE');           

//*******************************************************************************        
        
        if ($info->isCorpusChristiOnThur())
        {
            $timeToSearch = strtotime ('+4 days', $timeToSearch);
        }
        else
        {
            $timeToSearch = strtotime ('+7 days', $timeToSearch);
        }
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'corpusChristi' );
        $dates['corpusChristi'][1]->setRank('SOLEMNITY');
        $dates['corpusChristi'][1]->setLiteralDay('Corpus Christi');           
        $dates['corpusChristi'][1]->setLiturgicalColor('WHITE');           

//*******************************************************************************        

        $timeToSearch = strtotime('+19 days', $info->getPentecostSunday());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'sacredHeart' );
        $dates['sacredHeart'][1]->setRank('SOLEMNITY');
        $dates['sacredHeart'][1]->setLiteralDay('The Most Sacred Heart of Jesus');           
        $dates['sacredHeart'][1]->setLiturgicalColor('WHITE');        
        
//*******************************************************************************        

        $timeToSearch = strtotime('+1 days', $timeToSearch);
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'immaculateHeartOfMary' );
        $dates['immaculateHeartOfMary'][1]->setRank('MEMORIAL');
        $dates['immaculateHeartOfMary'][1]->setLiteralDay('Immaculate Heart of Mary');           
        $dates['immaculateHeartOfMary'][1]->setLiturgicalColor('WHITE');        
        
//*******************************************************************************          

        $timeToSearch = mktime(0,0,0,6,24, $info->getYear());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'birthOfJohnTheBaptist' );
        $dates['birthOfJohnTheBaptist'][1]->setRank('SOLEMNITY');
        $dates['birthOfJohnTheBaptist'][1]->setLiteralDay('Birth of John the Baptist');           
        $dates['birthOfJohnTheBaptist'][1]->setLiturgicalColor('WHITE');        
        
//*******************************************************************************          

        $timeToSearch = mktime(0,0,0,6,29, $info->getYear());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'peterAndPaulApostles' );
        $dates['peterAndPaulApostles'][1]->setRank('SOLEMNITY');
        $dates['peterAndPaulApostles'][1]->setLiteralDay('Saints Peter and Paul Apostles');           
        $dates['peterAndPaulApostles'][1]->setLiturgicalColor('RED');        
        
//*******************************************************************************          

        $timeToSearch = mktime(0,0,0,8,15,$info->getYear());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'assumption' );
        $dates['assumption'][1]->setRank('SOLEMNITY');
        $dates['assumption'][1]->setLiteralDay('Assumption');           
        $dates['assumption'][1]->setLiturgicalColor('WHITE');        
        

//*******************************************************************************        

        $timeToSearch = mktime(0,0,0,11,1,$info->getYear());
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'allSaints' );
        $dates['allSaints'][1]->setRank('SOLEMNITY');
        $dates['allSaints'][1]->setLiteralDay('All Saints');           
        $dates['allSaints'][1]->setLiturgicalColor('WHITE');        

//*******************************************************************************        
        
        return ($dates);
        
    }
    
    function seasonLowOdinary ($info, $resume )
    {
        $dates = array();
        $ashWednesday = $info->getAshWednesday();
        $startDate = strtotime('-1 day', $ashWednesday);
        $weekNumber = $resume -1;
        $counter = (($weekNumber-2)*-7)-3;
        $endDate = strtotime($counter.' days', $ashWednesday);
        
        $weekOfOrdinaryTime = $weekNumber-2;
        $counter = 0;

        while ($startDate > $endDate)
        {
            $cal = new Calendary($startDate);

            if ( $cal->getDayOfWeek() == 0 ) 
            { // Sunday
                $key = 'the'.ordinalNumbers($weekOfOrdinaryTime).'SundayOfOrdinaryTime';
                $cal->setLiteralDay('The '.ordinalNumbers($weekOfOrdinaryTime).' Sunday of Ordinary Time');
                $cal->setRank('SUNDAY');
                $cal->setLiturgicalWeek($weekOfOrdinaryTime+1);
                $weekOfOrdinaryTime--;
            }
            else
            {

                $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers($weekOfOrdinaryTime).'WeekOfOrdinaryTime';
                $cal->setLiteralDay($cal->getLiteralDow().' of the '.ordinalNumbers($weekOfOrdinaryTime).' week of Ordinary Time');
                $cal->setRank('WEEKDAY');
                $cal->setLiturgicalWeek($weekOfOrdinaryTime+1);
            }	
            
            $cal->setLiturgicalColor('GREEN');
            $cal->setLiturgicalSeason('OT');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear() % 2));              
            
            $dates[$key] = array
            (
                $startDate,
                $cal
            );             
            
            $dates = sortArray($dates);
            $startDate = strtotime('-1 day', $startDate);

        }
    
        return ($dates);
    }
