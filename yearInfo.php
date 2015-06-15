<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of yearInfo
 *
 * @author stefano
 */
class yearInfo 
{
    
    private $year = 0;
    private $leapYear = 0;
    private $daysInYear = 365;
    private $easterDate = 0;
    private $christmasDate = 0;
    private $ashWednesday = 0;
    private $palmSunday = 0; 
    private $divineMercy = 0;
    private $pentecostSunday = 0;
    private $startAdvent = 0;
    private $ascensionIsSunday = FALSE;
    private $epiphanyIsSix = FALSE;
    private $corpusChristiIsThur = FALSE;
    
    function __construct($yearParam, $flagAscensionIsSunday, $flagEpiphanyIsSix, $flagCorpusChristiIsThur) 
    {
        $this->setYear($yearParam);
        $this->setEaster(date('d/m/Y',easter_date($yearParam)));
        $this->setChristmas($yearParam);
        $this->setAshWednesday();
        $this->setPalmSunday();
        $this->setDivineMercy();
        $this->setPentecostSunday();
        $this->setStartAdvent();
        $this->leapYear = isLeapYear($yearParam);
        $this->daysInYear = (int)date('z', mktime(0,0,0,12,31,$this->getYear()));
        $this->corpusChristiIsThur = $flagCorpusChristiIsThur;
        $this->epiphanyIsSix = $flagEpiphanyIsSix;
        $this->ascensionIsSunday = $flagAscensionIsSunday;
    }
    
    function getYear ()
    {
        return ($this->year);
    }
    

    function getEaster ()
    {
        return ($this->easterDate);
    }
    
    function isLeapYear()
    {
        return ($this->leapYear);
    }

    function daysInYear()
    {
        return ($this->daysInYear);
    }

    function getAshWednesday ()
    {
        return($this->ashWednesday);
    }

    function getPalmSunday ()
    {
        return($this->palmSunday);
    }
    
    function getDivineMercy ()
    {
        return($this->divineMercy);
    }
    
    function getPentecostSunday ()
    {
        return($this->pentecostSunday);
    }
    
    function getChristmas()
    {
        return $this->christmasDate;
    }

    function getStartAdvent()
    {
        return $this->startAdvent;
    }
    
    function isEpiphanyOnSix()
    {
        return boolval($this->epiphanyIsSix);
    }

    function isAscensionOnSunday()
    {
        return boolval($this->ascensionIsSunday);
    }
    
    function isCorpusChristiOnThur()
    {
        return boolval($this->corpusChristiIsThur);
    }
    
    private function setYear ($dateParam)
    {
        $this->year = $dateParam;
    }
    
    private function setEaster ($easterDate)
    {
        $tmpDay = (int)substr($easterDate, 0,2);
        $tmpMonth = (int)substr($easterDate, 3,2);
        $tmpYear = (int)substr ($easterDate, 6,4);
        $this->easterDate = mktime (0, 0, 0, $tmpMonth, $tmpDay, $tmpYear);
    }
    
    private function setChristmas ($year)
    {
        $this->christmasDate = mktime (0, 0, 0, 12, 25, $year);
    }
    
    private function setAshWednesday ()
    {
        $this->ashWednesday = strtotime('-46 days', $this->getEaster());
    }

    private function setPalmSunday ()
    {
        $this->palmSunday = strtotime('-7 days', $this->getEaster());
    }

    private function setDivineMercy ()
    {
        $this->divineMercy = strtotime('+7 days', $this->getEaster());
    }
    
    private function setPentecostSunday ()
    {
        $this->pentecostSunday = strtotime('+49 days', $this->getEaster());
    }
    
    private function setStartAdvent()
    {
        $adventLen = array(-28, -22, -23, -24, -25, -26, -27);
        $lengthOfAdvent = $adventLen[(int)date('w',$this->getChristmas())];
        $this->startAdvent = strtotime($lengthOfAdvent.' days', $this->getChristmas());
        
    }
}
