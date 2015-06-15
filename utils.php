<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    function isLeapYear($year)
    {
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
    }

    function ordinalNumbers($index)
    {
        $ordinalNumbers = array 
        (
            '1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '10th',
            '11th', '12th', '13th', '14th', '15th', '16th', '17th', '18th', '19th', '20th',
            '21st', '22nd', '23rd', '24th', '25th', '26th', '27th', '28th', '29th', '30th',
            '31st', '32nd', '33rd', '34th', '35th', '36th', '37th', '38th', '39th', '40th',
        );

        return ($ordinalNumbers[$index]);
    }

    function liturgicalColors( $key, $value) 
    {
        $liturgicalColors = array 
        (
            'RED' => array('name' => 'RED','hex' => '#FF0000'),
            'ROSE' => array('name' => 'ROSE','hex' => '#FF007F'),
            'PURPLE' => array('name' => 'PURPLE','hex' => '#800080'),
            'GREEN' => array('name' => 'GREEN','hex' => '#008000'),
            'WHITE' => array('name' => 'WHITE','hex' => '#FFFFFF'),
            'GOLD' => array('name' => 'GOLD','hex' => '#FFD700')
        );

        return ($liturgicalColors[$key][$value]);        
    }
    
    function days($index)
    {
            $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
            return ($days[$index]);
    }
    
    function psalterWeeks($key, $value)
    {
        $psalterWeeks = array
        (
          array ('id'=>'4','name'=>'Psalter Week IV'),
          array ('id'=>'1','name'=>'Psalter Week I'),
          array ('id'=>'2','name'=>'Psalter Week II'),
          array ('id'=>'3','name'=>'Psalter Week III')
        );
    
        return ($psalterWeeks[$key][$value]);        
    }

    function liturgicalSundayCycles($key, $value) 
    {
        $liturgicalSundayCycles = array
        (
            array ('id'=>'A','name'=>'Year A/Cycle I'),
            array ('id'=>'B','name'=>'Year B/Cycle II'),
            array ('id'=>'C','name'=>'Year C/Cycle III')
        );
        return ($liturgicalSundayCycles[$key][$value]);        
    }    

    function liturgicalWeekdayCycles($key, $value) 
    {
        $liturgicalWeekdayCycles = array
        (
            array ('id'=>'II','name'=>'Weekdays Cycle II'),
            array ('id'=>'I','name'=>'Weekdays Cycle I'),
        );
        return ($liturgicalWeekdayCycles[$key][$value]);        
    }    
    
    
    function categories($key) 
    {
        $categories = array 
        (
            'LENT' => 'Lent',
            'HOLY_WEEK' => 'HolyWeek',
            'EASTER' => 'Easter',
            'OT' => 'OrdinaryTime',
            'ADVENT' => 'Advent',
            'CHRISTMAS' => 'Christmastide'
        );
        return ($categories[$key]);        
    }  
    
    function types( $key, $value) 
    {
        $types = array
        (
            'SOLEMNITY' => array ('id'=>'SOLEMNITY','name'=>'Solemnity','rank'=>12, 'function'=>'solemnityHandler'),
            'SUNDAY_OF_EASTER' => array ('id' => 'SUNDAY_OF_EASTER','name' => 'Sunday','rank' => 11, 'function'=>'sundayWeekdayHandler'), // Feasts and memorials cannot replace this
            'SUNDAY_OF_LENT' => array ('id' => 'SUNDAY_OF_LENT','name' => 'Sunday','rank' => 11, 'function'=>'sundaysAndWeekdaysOfLentAAndAdventHandler'), // Feasts and memorials cannot replace this
            'SUNDAY_OF_ADVENT' => array ('id' => 'SUNDAY_OF_ADVENT','name' => 'Sunday','rank' => 11, 'function'=>'sundaysAndWeekdaysOfLentAAndAdventHandler'), // Feasts and memorials cannot replace this
            'TRIDUUM' => array ('id' => 'TRIDUUM','name' => 'Triduum','rank' => 10, 'function'=>'triduumHandler'), // Thursday, Friday and Saturday of Holy Week
            'FEAST_OF_THE_LORD' => array ('id' => 'FEAST_OF_THE_LORD','name' => 'Feast','rank' => 9, 'function'=>'feastOfTheLordHandler'),
            'FIXED_FEAST' => array ('id' => 'FIXED_FEAST','name' => 'Feast','rank' => 9, 'function'=>'fixedFeastHandler'), // A feast that can replace a Sunday
            'SUNDAY' => array ('id' => 'SUNDAY','name' => 'Sunday','rank' => 8, 'function'=>'sundayWeekdayHandler'),
            'HOLY_WEEK' => array ('id' => 'HOLY_WEEK','name' => 'Holy Week','rank' => 7, 'function'=>'holyWeekHandler'), // Monday, Tuesday and Wednesday of Holy Week (cannot be replaced by a feast or memorial)
            
            // Feastdays (including weekdays), red for apostles while others are white
            'FEAST' => array ('id' => 'FEAST','name' => 'Feast','rank' => 6, 'function'=>'memorialFeastHandler'), // Takes precendence over weekdays (and Saturdays) but not Sundays
            'FEAST_APOSTLE' => array ('id' => 'FEAST_APOSTLE','name' => 'Feast','rank' => 6, 'function'=>'feastApostleHandler'),// Color is red
            'WEEKDAY_FEAST' => array ('id' => 'WEEKDAY_FEAST','name' => 'Weekday','rank' => 6, 'function'=>'memorialFeastHandler'), // Special weekdays which take precedence over memorials/opt memorials
            'FEAST_MARTYR' => array ('id' => 'FEAST_MARTYR','name' => 'Feast','rank' => 6, 'function'=>'martyrHandler'),
            
            // Memorials and Optional Memorials (Red for Martyrs while the rest follow the season color)
            'MEMORIAL' => array ('id' => 'MEMORIAL','name' => 'Memorial','rank' => 5, 'function'=>'memorialFeastHandler'), // Follows color of season
            'MEMORIAL_MARTYR' => array ('id' => 'MEMORIAL_MARTYR','name' => 'Memorial','rank' => 5, 'function'=>'martyrHandler'), // Color Red
            'OPT_MEMORIAL' => array ('id' => 'OPT_MEMORIAL','name' => 'Optional Memorial','rank' => 4, 'function'=>'optionalMemorialHandler'), // Follows color of season
            'OPT_MEMORIAL_MARTYR' => array ('id' => 'OPT_MEMORIAL_MARTYR','name' => 'Optional Memorial','rank' => 4, 'function'=>'optionalMemorialHandler'), // Follows color of season
            'COMMEM' => array ('id' => 'COMMEM','name' => 'Commemoration','rank' => 3, 'function'=>'commemorationHandler'), // Represents a downgraded memorial during lent (can replace a weekday)
            
            // Weekdays (Feria)
            'WEEKDAY_OF_EASTER' => array ('id' => 'WEEKDAY_OF_EASTER','name' => 'Weekday','rank' => 2, 'function'=>'sundayWeekdayHandler'),
            'WEEKDAY_OF_LENT' => array ('id' => 'WEEKDAY_OF_LENT','name' => 'Weekday','rank' => 1, 'function'=>'sundaysAndWeekdaysOfLentAAndAdventHandler'),
            'WEEKDAY_OF_ADVENT' => array ('id' => 'WEEKDAY_OF_ADVENT','name' => 'Weekday','rank' => 1, 'function'=>'sundaysAndWeekdaysOfLentAAndAdventHandler'),
            'WEEKDAY' => array ('id' => 'WEEKDAY','name' => 'Weekday','rank' => 0, 'function'=>'sundayWeekdayHandler'),
            'WEEKDAY_OF_EPIPHANY' => array ('id' => 'WEEKDAY_OF_EPIPHANY','name' => 'Weekday','rank' => 0, 'function'=>'weekdayOfEpiphanyHandler')
        );
        return ($types[$key][$value]);
    }  
    
    function replaceKey($array, $key1, $key2)
    {
        $keys = array_keys($array);
        $index = array_search($key1, $keys);

        if ($index !== false) {
            $keys[$index] = $key2;
            $array = array_combine($keys, $array);
        }

        return $array;
    }
    
    function sortArray ($arrayToSort)
    {
        $sortArray = array();
        $localArray = $arrayToSort;
        $sortArray = array_column($localArray, 0);
        array_multisort($sortArray, SORT_ASC, $localArray);

        return ($localArray);
    }