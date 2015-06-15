<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function seasonOfChristmas($info, $endDate)
    {
        $dates = array();
        $startDate = mktime (0,0,0,1,1,$info->getYear());
        
        $cal = new calendary($startDate);

        $sundays = 0;
        if ($cal->getDayOfWeek() == 0)
            $sundays++;
        
        $key      = 'maryMotherOfGod';
        $cal->setLiteralDay('maryMotherOfGod');
        $cal->setRank('SOLEMNITY');
        $cal->setLiturgicalWeek($sundays);
        $cal->setLiturgicalColor('WHITE');
        $cal->setLiturgicalSeason('CHRISTMAS');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle(($cal->getYear() % 2));            

        $dates[$key] = array
        (
            $startDate,
            $cal
        );         

        
        if ($info->isEpiphanyOnSix())
            $endDate = mktime(0,0,0,1,6,$info->getYear());
        else
        {
            $endDate = strtotime ('+'.(7-$cal->getDayOfWeek()).' days', $startDate);
        }
        

        $startDate = strtotime ('+1 day', $startDate);

        while ( $startDate < $endDate)
        {
            
            $cal = new Calendary($startDate);
            
            if ($cal->getDayOfWeek() == 0)
            {
                $key      = 'secondSundayOfChristmas';
                $cal->setLiteralDay('Second Sunday of Christmas');
                $cal->setRank('SUNDAY');
                $sundays++;
                $cal->setLiturgicalWeek($sundays);
            }
            else 
            {
                $key      = $cal->getLiteralDow().'BeforeEpiphany';
                $cal->setLiteralDay($cal->getLiteralDow().' before Epiphany');
                $cal->setRank('WEEKDAY_OF_EPIPHANY');
                $cal->setLiturgicalWeek($sundays+1);
            }

            $cal->setLiturgicalColor('WHITE');
            $cal->setLiturgicalSeason('CHRISTMAS');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear() % 2));               

            $dates[$key] = array
            (
                $startDate,
                $cal
            );               
            
            $startDate = strtotime ('+1 day', $startDate);
        }

        $cal = new calendary($startDate);
        
        $key      = 'epiphanyOfOurLord';
        $cal->setLiteralDay('Epiphany of Our Lord');
        $cal->setRank('SOLEMNITY');
        if ($cal->getDayOfWeek() == 0)
            $sundays++;
        $cal->setLiturgicalWeek($sundays);
        $cal->setLiturgicalColor('WHITE');
        $cal->setLiturgicalSeason('CHRISTMAS');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle(($cal->getYear() % 2));            

        $dates[$key] = array
        (
            $startDate,
            $cal
        );            
        
        if ($cal->getDay() == 7 || $cal->getDay() == 8)
        {
            $endDate = strtotime ('+1 days', $startDate);
        }
        else
        {
            $endDate = strtotime ('+'.(7-$cal->getDayOfWeek()).' days', $startDate);
        }
        
        $startDate = strtotime ('+1 day', $startDate);

        while ( $startDate < $endDate)
        {
            
            $cal = new Calendary($startDate);
            
            $key      = $cal->getLiteralDow().'AfterEpiphany';
            $cal->setLiteralDay($cal->getLiteralDow().' after Epiphany');
            $cal->setRank('WEEKDAY_OF_EPIPHANY');
            $cal->setLiturgicalWeek($sundays);
            $cal->setLiturgicalColor('WHITE');
            $cal->setLiturgicalSeason('CHRISTMAS');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle(($cal->getYear() % 2));               

            $dates[$key] = array
            (
                $startDate,
                $cal
            );               
            
            $startDate = strtotime ('+1 day', $startDate);
        }        

        $cal = new calendary($startDate);
        
        $key      = 'baptismOfTheLord';
        $cal->setLiteralDay('Baptism of the Lord');
        $cal->setRank('SOLEMNITY');
        if ($cal->getDayOfWeek() == 0)
            $sundays++;
        $cal->setLiturgicalWeek($sundays);
        $cal->setLiturgicalColor('WHITE');
        $cal->setLiturgicalSeason('CHRISTMAS');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle(($cal->getYear() % 2));            

        $dates[$key] = array
        (
            $startDate,
            $cal
        );         
        
        return ($dates);
        
    }
