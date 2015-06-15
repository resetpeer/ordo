<?php
    require 'otherCelebrations.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function setGeneralCalendar( $info, &$arrayResult)
{
    $otherCelebrations = otherCelebrations($info->getYear());

    $arrayCols = array_column($arrayResult, 0);
    $arrayKeys = array_keys($arrayResult);

    $counter = count($otherCelebrations);
    for ($i = 0; $i < $counter; $i++)
    {
        $timeToSearch = $otherCelebrations[$i][2];
        $candidateRank = $otherCelebrations[$i][3];
        $position = array_search($timeToSearch, $arrayCols);
        $existingRank = $arrayResult[$arrayKeys[$position]][1]->getRank();
        if ($existingRank == 'WEEKDAY_OF_LENT')
        {
            if ( $candidateRank == 'MEMORIAL' || $candidateRank == 'OPT_MEMORIAL' 
                || $candidateRank == 'MEMORIAL_MARTYR' || $candidateRank == 'OPT_MEMORIAL_MARTYR'  )
            {
                $candidateRank = 'COMMEM';
                $otherCelebrations[$i][3] = $candidateRank;
                $otherCelebrations[$i][4] = 'PURPLE';
            }
        }
        if ( types($candidateRank, 'rank') > types($existingRank, 'rank') ) 
        { // Candidate rank is higher than existing rank
          // No questions asked, higher ranking candidates replace existing dates
            if ( $candidateRank != 'OPT_MEMORIAL_MARTYR' && $candidateRank != 'OPT_MEMORIAL' 
                    && $candidateRank != 'COMMEM') 
            {
                $arrayResult = replaceKey($arrayResult,$arrayKeys[$position], $otherCelebrations[$i][0] );
                $arrayResult[$otherCelebrations[$i][0]][1]->setRank($candidateRank);
                $arrayResult[$otherCelebrations[$i][0]][1]->setLiteralDay($otherCelebrations[$i][1]);           
                $arrayResult[$otherCelebrations[$i][0]][1]->setLiturgicalColor($otherCelebrations[$i][4]);                       
            }
            else
            {
                $arrayResult[$arrayKeys[$position]][1]->setArrayOption ($otherCelebrations[$i]);
            }
        }
        elseif (types($candidateRank, 'rank') == types($existingRank, 'rank'))
        {
                $arrayResult[$arrayKeys[$position]][1]->setArrayOption ($otherCelebrations[$i]);
        }
    }
    
    return;
}