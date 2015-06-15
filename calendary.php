<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of calendary
 *
 * @author stefano
 */
class Calendary 
{
    private $literalDow;
    private $day;
    private $month;
    private $year;
    private $dayOfWeek;
    private $dayOfYear;
    private $weekOfYear;
    private $literalOfDay;
    private $rank;
    private $liturgicalSeason;
    private $liturgicalWeek;
    private $liturgicalColor;
    private $psalterWeek;
    private $sundayCycle;
    private $weekdayCycle;
    private $arrayOptions;
    

    
    function __construct ($dayTimestamp)
    {
        $this->literalDow   = date('l', $dayTimestamp);
        $this->day          = (int)date('j', $dayTimestamp);
        $this->month        = (int)date('n', $dayTimestamp);
        $this->year         = (int)date('Y', $dayTimestamp);
        $this->dayOfWeek    = (int)date('w', $dayTimestamp);
        $this->dayOfYear    = (int)date('z', $dayTimestamp);
        $this->weekOfYear   = (int)strftime('%U',$dayTimestamp);
        $this->arrayOptions = array();
    }
    
    function getLiteralDow()
    {
        return ($this->literalDow);
    }

    
    function getDay()
    {
        return ($this->day);
    }
    
    function getMonth()
    {
        return ($this->month);
    }

    function getYear()
    {
        return ($this->year);
    }
    
    function getDayOfWeek()
    {
        return ($this->dayOfWeek);
    }

    function getDayOfYear()
    {
        return ($this->dayOfYear);
    }

    function getWeekOfYear()
    {
        return ($this->weekOfYear);
    }
    
    
    function getLiteralOfDay()
    {
        return ($this->literalOfDay);
    }

    function getLiturgicalSeason()
    {
        return ($this->liturgicalSeason);
    }
    
    function getLiturgicalWeek()
    {
        return ($this->liturgicalWeek);
    }
    
    function getRank()
    {
        return ($this->rank);
    }
    
    function getLiturgicalColor()
    {
        return ($this->color);
    }
    
    function getPsalterWeek()
    {
        return ($this->psalterWeek);
    }
    
    function getSundayCycle()
    {
        return ($this->sundayCycle);
    }

    function getWeekdayCycle()
    {
        return ($this->weekdayCycle);
    }
    
    
    function setLiteralDay ($literal)
    {
        $this->literalOfDay = $literal;
    }
    
    function setRank ($rank)
    {
        $this->rank = $rank;
    }

    function setLiturgicalWeek ($liturgicalWeek)
    {
        $this->liturgicalWeek = $liturgicalWeek;
    }

    function setLiturgicalColor ($liturgicalColor)
    {
        $this->liturgicalColor = liturgicalColors($liturgicalColor, 'name');
    }

    function setPsalterWeek ($psalterWeek)
    {
        $this->psalterWeek = psalterWeeks($psalterWeek, 'name');
    }    
    
    function setLiturgicalSeason ($season)
    {
        $this->liturgicalSeason = categories($season);
    }    

    function setSundayCycle ($key)
    {
        $this->sundayCycle = liturgicalSundayCycles($key, 'name');
    }

    function setWeekdayCycle ($key)
    {
        $this->weekdayCycle = liturgicalWeekdayCycles($key, 'name');
    }

    function setArrayOption ($array)
    {
//        var_dump ($array);
        array_push ($this->arrayOptions, $array);
    }
}
