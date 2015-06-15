<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function seasonOfEaster ($info)
    {

        $easterWeek = 1;
        $easterDayCounter = 0;

        $dates   = array();

       // Insert into array Easter sunday        
        $cal      = new Calendary($info->getEaster());
        $key      = 'easter';
        $cal->setLiteralDay('Easter of Resurrection');
        $cal->setRank('SOLEMNITY');
        $cal->setLiturgicalWeek(1);
        $cal->setLiturgicalColor('GOLD');
        $cal->setLiturgicalSeason('EASTER');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle($cal->getYear() % 2);
        
        $dates[$key] = array
        (
            $info->getEaster(),
            $cal
        );        


        for ($loopDate = strtotime ('+1 day', $info->getEaster()); $loopDate <= $info->getDivineMercy(); $loopDate = strtotime('+1 day', $loopDate))
        {
            $cal      = new Calendary($loopDate);
            $cal->setRank('SOLEMNITY');
            $cal->setLiturgicalWeek(1);
            $cal->setLiturgicalColor('WHITE');
            $cal->setLiturgicalSeason('EASTER');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle($cal->getYear() % 2);
            
            if ($cal->getDayOfWeek() == 0)
            {
                $key      = 'divineMercySunday';
                $cal->setLiteralDay('Sunday of Divine Mercy');
//                $easterWeek++;
                $cal->setLiturgicalWeek($easterWeek+1);
            }
            else
            {
                $key      = $cal->getLiteralDow().'InTheOctaveOfEaster';
                $cal->setLiteralDay($cal->getLiteralDow().' in the Octave of Easter');
            }
            

            $dates[$key] = array
            (
                $loopDate,
                $cal
            );            
            
        }
        
        for ($loopDate = strtotime ('+1 day', $info->getDivineMercy()); $loopDate < $info->getPentecostSunday(); $loopDate = strtotime('+1 day', $loopDate))
        {
            $cal      = new Calendary($loopDate);
            $cal->setLiturgicalWeek($easterWeek);
            $cal->setLiturgicalColor('WHITE');
            $cal->setLiturgicalSeason('EASTER');
            $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
            $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
            $cal->setWeekdayCycle($cal->getYear() % 2);
            
            if ($cal->getDayOfWeek() == 0)
            {
                $easterWeek++;
                $key      = 'the'.ordinalNumbers($easterWeek).'SundayOfEaster';
                $cal->setLiteralDay('The '.ordinalNumbers($easterWeek).' Sunday of Easter');
                $cal->setLiturgicalWeek($easterWeek);
                $cal->setRank('SUNDAY_OF_EASTER');
            }
            else
            {
                $key = $cal->getLiteralDow().'OfThe'.ordinalNumbers($easterWeek).'WeekOfEaster';
                $cal->setLiteralDay($cal->getLiteralDow().' of the '.ordinalNumbers($easterWeek).' week of Easter');
                $cal->setRank('WEEKDAY_OF_EASTER');
            }
            

            $dates[$key] = array
            (
                $loopDate,
                $cal
            );            
            
        }
        
        $cal      = new Calendary($info->getPentecostSunday());
        $key      = 'pentecostSunday';
        $cal->setLiteralDay('Pentecost Sunday');
        $cal->setRank('SOLEMNITY');
        $cal->setLiturgicalWeek($easterWeek);
        $cal->setLiturgicalColor('RED');
        $cal->setLiturgicalSeason('EASTER');
        $cal->setPsalterWeek($cal->getLiturgicalWeek()%4);
        $cal->setSundayCycle(($cal->getYear() - 1963) % 3);
        $cal->setWeekdayCycle($cal->getYear() % 2);
        
        $dates[$key] = array
        (
            $info->getEaster(),
            $cal
        );        

        
        $arrayResult = array_column($dates, 0);
        $arrayKeys = array_keys($dates);

        if ($info->isAscensionOnSunday())
        {
            $timeToSearch = strtotime('-7 days', $info->getPentecostSunday());
        }
        else
        {
            $timeToSearch = strtotime('-10 days', $info->getPentecostSunday());
        }
        
        $position = array_search($timeToSearch, $arrayResult);
        $dates = replaceKey($dates,$arrayKeys[$position], 'ascensionOfTheLord' );
        $dates['ascensionOfTheLord'][1]->setRank('SOLEMNITY');
        $dates['ascensionOfTheLord'][1]->setLiteralDay('Ascension of the Lord');            
        
        return ($dates);
    }
