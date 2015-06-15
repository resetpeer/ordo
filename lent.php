<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    function seasonOfLent ($info)
    {
        $ashWednesday        = $info->getAshWednesday();
        $palmSunday          = $info->getPalmSunday();

        
        $dates   = array();

        // Insert into array Ash Wednesday        
        $cal      = new Calendary($ashWednesday);
        $key      = 'ashWednesday';
        $cal->setLiteralDay('the Ash Wednesday');
        $cal->setRank('WEEKDAY_FEAST');
        $cal->setLiturgicalWeek(0);
        $cal->setLiturgicalColor('PURPLE');
        $cal->setLiturgicalSeason('LENT');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle($cal->getYear() % 2);
        
        $dates[$key] = array
        (
            $ashWednesday,
            $cal
        );
        
        
        $initialWeek = (int)strftime('%U',$ashWednesday);
        $initialDay  = (int)date('z',$ashWednesday);        

        $loopDate = strtotime('+1 day', $ashWednesday);
        
        while ($loopDate < $palmSunday)
        {
            $cal      = new Calendary($loopDate);
            $weekDiff = $cal->getWeekOfYear() - $initialWeek;
            $dayDiff  = $cal->getDayOfYear() - $initialDay;
            $cal->setLiturgicalSeason('LENT');
            $cal->setLiturgicalColor('PURPLE');
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle($cal->getYear() % 2);


            if ( $cal->getDayOfWeek() == 0 ) 
            {
                $key = 'the'.ordinalNumbers($weekDiff-1).'SundayOfLent';
                $cal->setLiteralDay('the '.ordinalNumbers($weekDiff-1).' Sunday of Lent');
                $cal->setRank('SUNDAY_OF_LENT');
                $cal->setLiturgicalWeek($weekDiff);
                $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
                if ( $weekDiff == 4)
                {
                    $cal->setLiturgicalColor('ROSE');
                    
                }
            }
            else 
            {
                // The days from after Ash Wednesday till before the first Sunday of Lent
                // are known as "** after Ash Wednesday"
                if ( $dayDiff < 4 ) 
                {
                    $key = $cal->getLiteralDow().'AfterAshWednesday';
                    $cal->setLiteralDay($cal->getLiteralDow().' after Ash Wednesday');
                    $cal->setLiturgicalWeek(0);
                    $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
                }
                else 
                {
                    $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers($weekDiff-1).'WeekOfLent';
                    $cal->setLiteralDay($cal->getLiteralDow().' of the '.ordinalNumbers($weekDiff-1).' week of Lent');
                    $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
                    $cal->setLiturgicalWeek($weekDiff);
                }
                $cal->setRank('WEEKDAY_OF_LENT');
                $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
                $cal->setWeekdayCycle($cal->getYear() % 2);
            }            

            $dates[$key] = array
            (
                $loopDate,
                $cal
            );
            
            $loopDate = strtotime('+1 day', $loopDate);
        }

        
        
//        $loopDate = strtotime('+1 day', $loopDate);
        
        for ($easter = $info->getEaster() ; $loopDate < $easter; $loopDate = strtotime('+1 day', $loopDate))
        {
            $cal      = new Calendary($loopDate);
            $weekDiff = $cal->getWeekOfYear() - $initialWeek;
            $dayDiff  = $cal->getDayOfYear() - $initialDay;
            $cal->setLiturgicalWeek(0);
            $cal->setLiturgicalSeason('HOLY_WEEK');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);

            switch ($cal->getDayOfWeek())
            {
                case 0:
                    $key      = 'palmSunday';
                    $cal->setLiteralDay('Palm Sunday');
                    $cal->setLiturgicalColor('RED');
                    $cal->setRank('SOLEMNITY');
                    break;
                case 1:
                case 2:
                case 3:
                    $key      = $cal->getLiteralDow().'OfHolyWeek';
                    $cal->setLiteralDay($cal->getLiteralDow().' of Holy Week');
                    $cal->setLiturgicalColor('PURPLE');
                    $cal->setRank('HOLY_WEEK');
                    break;
                case 4:
                    $key      = 'holyThursday';
                    $cal->setLiteralDay('Holy Thursday');
                    $cal->setLiturgicalColor('WHITE');
                    $cal->setRank('TRIDUUM');
                    break;
                case 5:
                    $key      = 'goodFriday';
                    $cal->setLiteralDay('Good Friday');
                    $cal->setLiturgicalColor('RED');
                    $cal->setRank('TRIDUUM');
                    break;
                case 6:
                    $key      = 'holySaturday';
                    $cal->setLiteralDay('Holy Saturday');
                    $cal->setLiturgicalColor('RED');
                    $cal->setRank('TRIDUUM');
                    break;
                default:
                    break;
            }
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle($cal->getYear() % 2);
    
            $dates[$key] = array
            (
                $palmSunday,
                $cal
            );        
        }

   //*******************************************************************************        
        
        $arrayResult = array_column($dates, 0);
        $arrayKeys = array_keys($dates);

        $timeToSearch = mktime(0,0,0,3,19,$info->getYear());
        $position = array_search($timeToSearch, $arrayResult);
        if ($dates[$arrayKeys[$position]][0] >= $info->getPalmSunday() && 
            $dates[$arrayKeys[$position]][0] <  $info->getEaster())
        {
            $timeToSearch = strtotime ('-1 day', $info->getPalmSunday());
            $position = array_search($timeToSearch, $arrayResult);
        }
        elseif ($dates[$arrayKeys[$position]][1]->getDayOfWeek() == 0) 
        {
            $timeToSearch = strtotime ('+1 day', $info->getPalmSunday());
            $position = array_search($timeToSearch, $arrayResult);
        }

        $dates = replaceKey($dates,$arrayKeys[$position], 'josephHusbandOfMary' );
        $dates['josephHusbandOfMary'][1]->setRank('SOLEMNITY');
        $dates['josephHusbandOfMary'][1]->setLiteralDay('Joseph Husband of Mary');           
        $dates['josephHusbandOfMary'][1]->setLiturgicalColor('WHITE');           

//*******************************************************************************        
        
        return ($dates);
    }
