<?php
    function otherCelebrations ($year)
    {
        $dates = array 
        (
            array
            (
                'saintBasilAndGregory',
                'Saints Basil the Great and Gregory Nazianzen,Bishops and Doctors of the Church',
                mktime (0, 0, 0, 1, 2, $year),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'theMostHolyNameOfJesus',
                'The Most Holy Name of Jesus',
                mktime (0, 0, 0, 1, 3, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintRaymondOfPenyafort',
                'Saint Raymond of Penyafort, Priest',
                mktime (0, 0, 0, 1, 7, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintHilaryOfPoitiers',
                'Saint Hilary of Poitiers, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 1, 13, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAnthonyOfEgypt',
                'Saint Anthony of Egypt, Abbot',
                mktime (0, 0, 0, 1, 17, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintFabian',
                'Saint Fabian, Pope and Martyr',
                mktime (0, 0, 0, 1, 20, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintSebastian',
                'Saint Sebastian, Martyr',
                mktime (0, 0, 0, 1, 20, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAgnes',
                'Saint Agnes, Virgin and Martyr',
                mktime (0, 0, 0, 1, 21, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintVincent',
                'Saint Vincent, Deacon and Martyr',
                mktime (0, 0, 0, 1, 22, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintFrancisDeSales',
                'Saint Francis de Sales, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 1, 24, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'conversionOfSaintPaul',
                'The Conversion of Saint Paul the Apostle',
                mktime (0, 0, 0, 1, 25, $year ),
                'FEAST',
                'WHITE'
            ),
            array
            (
                'saintsTimothyAndTitus',
                'Saints Timothy and Titus, Bishops',
                mktime (0, 0, 0, 1, 26, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAngelaMerici',
                'Saint Angela Merici, Virgin',
                mktime (0, 0, 0, 1, 27, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintThomasAquinas',
                'Saint Thomas Aquinas, Priest and Doctor of the Church',
                mktime (0, 0, 0, 1, 28, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnBosco',
                'Saint John Bosco, Priest',
                mktime (0, 0, 0, 1, 31, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'presentationOfTheLord',
                'The Presentation of the Lord',
                mktime (0, 0, 0, 2, 2, $year ),
                'FEAST_OF_THE_LORD',
                'WHITE'
            ),
            array
            (
                'saintBlase',
                'Saint Blaise, Bishop and Martyr',
                mktime (0, 0, 0, 2, 3, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAnsgar',
                'Saint Ansgar, Bishop',
                mktime (0, 0, 0, 2, 3, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAgatha',
                'Saint Agatha, Virgin and Martyr',
                mktime (0, 0, 0, 2, 5, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintsPaulMikiAndCo',
                'Saint Paul Miki and Companions, Martyrs',
                mktime (0, 0, 0, 2, 6, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintJerome',
                'Saint Jerome Emiliani',
                mktime (0, 0, 0, 2, 8, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJosephine',
                'Saint Josephine Bakhita, Virgin',
                mktime (0, 0, 0, 2, 8, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintScholastica',
                'Saint Scholastica, Virgin',
                mktime (0, 0, 0, 2, 10, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'ourLadyOfLourdes',
                'Our Lady of Lourdes',
                mktime (0, 0, 0, 2, 11, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsCyrilAndMethodius',
                'Saints Cyril, Monk, and Methodius, Bishop',
                mktime (0, 0, 0, 2, 14, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'foundersOfTheSevileOrder',
                'The Seven Holy Founders of the Servite Order',
                mktime (0, 0, 0, 2, 17, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPeterDamian',
                'Saint Peter Damian, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 2, 21, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'chairOfSaintPeter',
                'The Chair of Saint Peter the Apostle',
                mktime (0, 0, 0, 2, 22, $year ),
                'FEAST',
                'WHITE'
            ),
            array
            (
                'saintPolycarp',
                'Saint Polycarp, Bishop and Martyr',
                mktime (0, 0, 0, 2, 23, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),     
            array
            (
                'saintCasimir',
                'Saint Casimir',
                mktime (0, 0, 0, 3, 4, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsPerpetuaAndFelicity',
                'Saints Perpetua and Felicity, Martyrs',
                mktime (0, 0, 0, 3, 7, $year ),
                'MEMORIAL',
                'RED'
            ),
            array
            (
                'saintJohnOfGod',
                'Saint John of God, Religious',
                mktime (0, 0, 0, 3, 8, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintFrancesOfRome',
                'Saint Frances of Rome, Religious',
                mktime (0, 0, 0, 3, 9, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPatrick',
                'Saint Patrick, Bishop',
                mktime (0, 0, 0, 3, 17, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintCyrilOfJerusalem',
                'Saint Cyril of Jerusalem, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 3, 18, $year ),
                'OPT_MEMORIAL',
                'WHITE'
                ),
            array
            (
                'saintTuribiusOfMogrovejo',
                'Saint Turibius of Mogrovejo, Bishop',
                mktime (0, 0, 0, 3, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintFrancisOfPaola',
                'Saint Francis of Paola, Hermit',
                mktime (0, 0, 0, 4,2, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintIsidore',
                'Saint Isidore, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 4, 4, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintVincentFerrer',
                'Saint Vincent Ferrer, Priest',
                mktime (0, 0, 0, 4, 5, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnBaptistDeLaSalle',
                'Saint John Baptist de la Salle, Priest',
                mktime (0, 0, 0, 4, 7, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintStanislaus',
                'Saint Stanislaus, Bishop and Martyr',
                mktime (0, 0, 0, 4, 11, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintMartin',
                'Saint Martin I, Pope and Martyr',
                mktime (0, 0, 0, 4, 13, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
                ),
            array
            (
                'saintAnselmOfCanterbury',
                'Saint Anselm of Canterbury, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 4, 21, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintGeorge',
                'Saint George, Martyr',
                mktime (0, 0, 0, 4, 23, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAdalbert',
                'Saint\'Adalbert of Prague, Bishop and Martyr',               
                mktime (0, 0, 0, 4, 23, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintFidelisOfSigmaringen',
                'Saint Fidelis of Sigmaringen, Priest and Martyr',
                mktime (0, 0, 0, 4, 24, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintMarkTheEvangelist',
                'Saint Mark, Evangelist',
                mktime (0, 0, 0, 4, 25, $year ),
                'FEAST',
                'RED'
            ),
            array
            (
                'saintPeterChanel',
                'Saint Peter Chanel, Priest and Martyr',
                mktime (0, 0, 0, 4, 28, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintLouisGrignonDeMontfort',
                'Saint Louis Grignion de Montfort, Priest',
                mktime (0, 0, 0, 4, 28, $year ),
                'OPT_MEMORIAL_MARTYR',
                'WHITE'
            ),
            array
            (
                'saintCatherineOfSiena',
                'Saint Catherine of Siena, Virgin and Doctor of the Church',
                mktime (0, 0, 0, 4, 29, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPiusV',
                'Saint Pius V, Pope',
                mktime (0, 0, 0, 4, 30, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJosephTheWorker',
                'Saint Joseph the Worker',
                mktime (0, 0, 0, 5, 1, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAthanasius',
                'Saint Athanasius, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 5, 2, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsPhilipAndJames',
                'Saints Philip and James, Apostles',
                mktime (0, 0, 0, 5, 3, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintsNereusAndAchilleus',
                'Saints Nereus and Achilleus, Martyrs',
                mktime (0, 0, 0, 5, 12, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintPancras',
                'Saint Pancras, Martyr',
                mktime (0, 0, 0, 5, 12, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'ourLadyOfFatima',
                'Our Lady of Fatima',
                mktime (0, 0, 0, 5, 13,$year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMatthias',
                'Saint Matthias, Apostle',
                mktime (0, 0, 0, 5, 14, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintJohnI',
                'Saint John I, Pope and Martyr',
                mktime (0, 0, 0, 5, 18, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintBernadineOfSiena',
                'Saint Bernardine of Siena, Priest',
                mktime (0, 0, 0, 5, 20, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintChristopherMagallanesAndCo',
                'Saint Christopher Magallanes, Priest, and Companions, Martyrs',
                mktime (0, 0, 0, 5, 21, $year ),
                'OPT_MEMORIAL',
                'RED'
            ),
            array
            (
                'saintRitaOfCascia',
                'Saint Rita of Cascia, Religious',
                mktime (0, 0, 0, 5, 22, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBedeTheVenerable',
                'Saint Bede the Venerable, Priest and Doctor of the Church',
                mktime (0, 0, 0, 5, 25, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintGregoryVII',
                'Saint Gregory VII, Pope',
                mktime (0, 0, 0, 5, 25, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMaryMagdaleneDePazzi',
                'Saint Mary Magdalene de’ Pazzi, Virgin',
                mktime (0, 0, 0, 5, 25, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPhilipNeri',
                'Saint Philip Neri, Priest',
                mktime (0, 0, 0, 5, 26, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAugustineOfCanterbury',
                'Saint Augustine of Canterbury, Bishop',
                mktime (0, 0, 0, 5, 27, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'visitationOfTheBlessedVirginMary',
                'The Visitation of the Blessed Virgin Mary',
                mktime (0, 0, 0, 5, 31, $year ),
                'FEAST',
                'WHITE'
            ),
            array
            (
                'saintJustinMartyr',
                'Saint Justin, Martyr',
                mktime (0, 0, 0, 6, 1, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintsMarcelinusAndPeter',
                'Saints Marcellinus and Peter, Martyrs',
                mktime (0, 0, 0, 6, 2, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintsCharlesLwangaAndCo',
                'Saint Charles Lwanga and Companions, Martyrs',
                mktime (0, 0, 0, 6, 3, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintBoniface',
                'Saint Boniface, Bishop and Martyr',
                mktime (0, 0, 0, 6, 5, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintNorbert',
                'Saint Norbert, Bishop',
                mktime (0, 0, 0, 6, 6, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintEphrem',
                'Saint Ephrem, Deacon and Doctor of the Church',
                mktime (0, 0, 0, 6, 9, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBarnabasTheApostle',
                'Saint Barnabas, Apostle',
                mktime (0, 0, 0, 6, 11, $year ),
                'MEMORIAL',
                'RED'
            ),
            array
            (
                'saintAnthonyOfPadua',
                'Saint Anthony of Padua, Priest and Doctor of the Church',
                mktime (0, 0, 0, 6, 13, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintRomuald',
                'Saint Romuald, Abbot',
                mktime (0, 0, 0, 6, 19, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAloysiusGonzaga',
                'Saint Aloysius Gonzaga, Religious',
                mktime (0, 0, 0, 6, 21, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPaulinusOfNola',
                'Saint Paulinus of Nola, Bishop',
                mktime (0, 0, 0, 6, 22, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintSaintsJohnFisherAndThomasMore',
                'Saints John Fisher, Bishop, and Thomas More, Martyrs',
                mktime (0, 0, 0, 6, 22, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintCyrilOfAlexandria',
                'Saint Cyril of Alexandria, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 6, 27, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintIrenaeus',
                'Saint Irenaeus, Bishop and Martyr',
                mktime (0, 0, 0, 6, 28, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'firstMartyrsOfTheChurchOfRome',
                'The First Martyrs of the Holy Roman Church',
                mktime (0, 0, 0, 6, 30, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintThomasTheApostle',
                'Saint Thomas, Apostle',
                mktime (0, 0, 0, 7, 3, $year ),
                'FEAST',
                'RED'
            ),
            array
            (
                'saintElizabethOfPortugal',
                'Saint Elizabeth of Portugal',
                mktime (0, 0, 0, 7,4, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAnthonyZaccaria',
                'Saint Anthony Zaccaria',
                mktime (0, 0, 0, 7, 5, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMariaGoretti',
                'Saint Maria Goretti, Virgin and Martyr',
                mktime (0, 0, 0, 7, 6, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAugustineZhaoRongAndCo',
                'Saint Augustine Zhao Rong, Priest, and Companions, Martyrs',
                mktime (0, 0, 0, 7, 9, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintBenedict',
                'Saint Benedict, Abbot',
                mktime (0, 0, 0, 7,11, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintHenry',
                'Saint Henry',
                mktime (0, 0, 0, 7, 13, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintCamillusDeLellis',
                'Saint Camillus De Lellis, Priest',
                mktime (0, 0, 0, 7, 14, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBonaventure',
                'Saint Bonaventure, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 7, 15, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'ourLadyOfMountCarmel',
                'Our Lady of Mount Carmel',
                mktime (0, 0, 0, 7, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintApollinaris',
                'Saint Apollinaris, Bishop and Martyr',
                mktime (0, 0, 0, 7, 20, $year ),
                'OPT_MEMORIAL',
                'RED'
            ),
            array
            (
                'saintLawrenceOfBrindisi',
                'Saint Lawrence of Brindisi, Priest and Doctor of the Church',
                mktime (0, 0, 0, 7, 21, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMaryOfMagdalene',
                'Saint Mary Magdalene',
                mktime (0, 0, 0, 7, 22, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBirgitta',
                'Saint Bridget, Religious',
                mktime (0, 0, 0, 7, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintSharbelMakhluf',
                'Saint Sharbel Makhlūf, Priest',
                mktime (0, 0, 0, 7, 24, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJames',
                'Saint James, Apostle',
                mktime (0, 0, 0, 7, 25, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintsJoachimAndAnne',
                'Saints Joachim and Anne, Parents of the Blessed Virgin Mary',
                mktime (0, 0, 0, 7, 26, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMartha',
                'Saint Martha',
                mktime (0, 0, 0, 7,29, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPeterChrysologus',
                'Saint Peter Chrysologus, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 7, 30, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintIgnatiusOfLoyola',
                'Saint Ignatius of Loyola, Priest',
                mktime (0, 0, 0, 7, 31, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAlphonsusMariaDeLiguori',
                'aint Alphonsus Liguori, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 8, 1, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPeterJulianEymard',
                'Saint Peter Julian Eymard, Priest',
                mktime (0, 0, 0, 8, 2, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintEusebiusOfVercelli',
                'Saint Eusebius of Vercelli, Bishop',
                mktime (0, 0, 0, 8, 2, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJeanVianney',
                'Saint John Vianney, Priest',
                mktime (0, 0, 0,8, 4, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'dedicationOfTheBasilicaOfSaintMaryMajor',
                'The Dedication of the Basilica of Saint Mary Major',
                mktime (0, 0, 0, 8, 5, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'transfiguration',
                'The Transfiguration of the Lord',
                mktime(0,0,0, 8, 6,$year),
                'FEAST_OF_THE_LORD',
                'WHITE'
            ),
            array
            (
                'saintSixtusII',
                'Saint Sixtus II, Pope, and Companions, Martyrs',
                mktime (0, 0, 0, 8, 7, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintSaintCajetan',
                'Saint Cajetan, Priest',
                mktime (0, 0, 0, 8, 7, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintDominic',
                'Saint Dominic, Priest',
                mktime (0, 0, 0, 8, 8, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintTeresaBenedictaOfTheCross',
                'Saint Teresa Benedicta of the Cross, Virgin and Martyr',
                mktime (0, 0, 0, 8, 9, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintLawrence',
                'Saint Lawrence, Deacon and Martyr',
                mktime (0, 0, 0, 8, 10, $year ),
                'FEAST_MARTYR',
                'RED'
            ),
            array
            (
                'saintClare',
                'Saint Clare, Virgin',
                mktime (0, 0, 0, 8, 11, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJaneFrancesDeChantal',
                'Saint Jane Frances de Chantal, Religious',
                mktime (0, 0, 0, 8, 12, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsPontianAndHippolytus',
                'Saints Pontian, Pope, and Hippolytus, Priest, Martyrs',
                mktime (0, 0, 0, 8, 13, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintMaximilianMaryKolbe',
                'Saint Maximilian Kolbe, Priest and Martyr',
                mktime (0, 0, 0, 8, 14, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintStephenOfHungary',
                'Saint Stephen of Hungary',
                mktime (0, 0, 0, 8, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnEudes',
                'Saint John Eudes, Priest',
                mktime (0, 0, 0, 8, 19, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBernardOfClairvaux',
                'Saint Bernard, Abbot and Doctor of the Church',
                mktime (0, 0, 0, 8, 20, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPiuxX',
                'Saint Pius X, Pope',
                mktime (0, 0, 0, 8, 21, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'queenshipOfBlessedVirginMary',
                'The Queenship of the Blessed Virgin Mary',
                mktime (0, 0, 0, 8, 22, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintRoseOfLima',
                'Saint Rose of Lima, Virgin',
                mktime (0, 0, 0, 8, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBartholomewTheApostle',
                'Saint Bartholomew, Apostle',
                mktime (0, 0, 0, 8, 24, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintJosephOfCalasanz',
                'Saint Joseph Calasanz, Priest',
                mktime (0, 0, 0, 8, 25, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintLouis',
                'Saint Louis',
                mktime (0, 0, 0, 8, 25, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMonica',
                'Saint Monica',
                mktime (0, 0, 0, 8, 27, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAugustineOfHippo',
                'Saint Augustine, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 8, 28, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'beheadingOfSaintJohnTheBaptist',
                'The Passion of Saint John the Baptist',
                mktime (0, 0, 0, 8, 29, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintGregoryTheGreat',
                'Saint Gregory the Great, Pope and Doctor of the Church',
                mktime (0, 0, 0, 9, 3, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'birthOfTheBlessedVirginMary',
                'The Nativity of the Blessed Virgin Mary',
                mktime (0, 0, 0, 9, 8, $year ),
                'FEAST',
                'WHITE'
            ),
            array
            (
                'saintPeterClaver',
                'Saint Peter Claver, Priest',
                mktime (0, 0, 0, 9, 9, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'holyNameOfTheBlessedVirginMary',
                'The Most Holy Name of Mary',
                mktime (0, 0, 0, 9, 12, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnChrysostom',
                'Saint John Chrysostom, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 9, 13, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'triumphOfTheCross',
                'The Exaltation of the Holy Cross',
                mktime(0,0,0, 9, 14,$year),
                'FEAST_OF_THE_LORD',
                'WHITE'
            ),
            array
            (
                'ourLadyOfSorrows',
                'Our Lady of Sorrows',
                mktime (0, 0, 0, 9, 15, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsCorneliusAndCyprian',
                'Saints Cornelius, Pope, and Cyprian, Bishop, Martyrs',
                mktime (0, 0, 0, 9, 16, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintRobertBellarmine',
                'Saint Robert Bellarmine, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 9, 17, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJanuarius',
                'Saint Januarius, Bishop and Martyr',
                mktime (0, 0, 0, 9, 19, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAndrewKimTaegonAndPaulChongHasangAndCo',
                'Saints Andrew Kim Tae-gŏn, Priest, and Paul Chŏng Ha-sang,
and Companions, Martyrs',
                mktime (0, 0, 0, 9, 20, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintMatthewTheEvangelist',
                'Saint Matthew, Apostle and Evangelist',
                mktime (0, 0, 0, 9, 21, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintPioOfPietrelcina',
                'Saint Pius of Pietrelcina, Priest',
                mktime (0, 0, 0, 9, 23, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsCosmasAndDamian',
                'Saints Cosmas and Damian, Martyrs',
                mktime (0, 0, 0, 9, 26, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintVincentDePaul',
                'Saint Vincent de Paul, Priest',
                mktime (0, 0, 0, 9, 27, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintWenceslaus',
                'Saint Wenceslaus, Martyr',
                mktime (0, 0, 0, 9, 28, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintSaintsRuizAndCo',
                'aint Lawrence Ruiz and Companions, Martyrs',
                mktime (0, 0, 0, 9, 28, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintsMichaelGabrielAndRaphael',
                'Saints Michael, Gabriel and Raphael, Archangels',
                mktime (0, 0, 0, 9, 29, $year ),
                'FEAST',
                'WHITE'
            ),
            array
            (
                'saintJerome',
                'aint Jerome, Priest and Doctor of the Church',
                mktime (0, 0, 0, 9, 30, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintThereseOfTheChildOfJesus',
                'Saint Thérèse of the Child Jesus, Virgin and Doctor of the Church',
                mktime (0, 0, 0, 10, 1, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'guardianAngels',
                'The Holy Guardian Angels',
                mktime (0, 0, 0, 10, 2, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintFrancisOfAsisi',
                'Saint Francis of Assisi',
                mktime (0, 0, 0, 10, 4, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintBruno',
                'Saint Bruno, Priest',
                mktime (0, 0, 0, 10, 6, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'ourLadyOfTheRosary',
                'Our Lady of the Rosary',
                mktime (0, 0, 0, 10, 7, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintDenisAndCo',
                'Saint Denis, Bishop, and Companions, Martyrs', 
                mktime (0, 0, 0, 10, 9, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintJohnLeonardi',
                'Saint John Leonardi, Priest',
                mktime (0, 0, 0, 10, 9, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintCallistusI',
                'Saint Callistus I, Pope and Martyr',
                mktime (0, 0, 0, 10, 14, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintTeresaOfJesus',
                'Saint Teresa of Jesus, Virgin and Doctor of the Church',
                mktime (0, 0, 0, 10, 15, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintHedwig',
                'Saint Hedwig, Religious',
                mktime (0, 0, 0, 10, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintSaintMargaretMaryAlacoque',
                'Saint Margaret Mary Alacoque, Virgin',
                mktime (0, 0, 0, 10, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintIgnatiusOfAntioch',
                'Saint Ignatius of Antioch, Bishop and Martyr',
                mktime (0, 0, 0, 10, 17, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintLukeTheEvangelist',
                'Saint Luke, Evangelist',
                mktime (0, 0, 0, 10, 18, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
            (
                'saintsJeanDeBrebeufIsaacJorguesAndCo',
                'Saints John de Brébeuf and Isaac Jogues, Priests,
and Companions, Martyrs',
                mktime (0, 0, 0, 10, 19, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintPaulOfTheCross',
                'Saint Paul of the Cross, Priest',
                mktime (0, 0, 0, 10, 19, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintJohnPaulII',
                'Saint John Paul II, Pope',
                mktime (0, 0, 0, 10, 22, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnOfCapistrano',
                'Saint John of Capistrano, Priest',
                mktime (0, 0, 0, 10, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAnthonyMaryClaret',
                'Saint Anthony Mary Claret, Bishop',
                mktime (0, 0, 0, 10, 24, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintsSimonAndJude',
                'Saints Simon and Jude, Apostles',
                mktime (0, 0, 0, 10, 28, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),
            array
             (
               'allSouls',
                'The Commemoration of All the Faithful Departed',
               mktime (0, 0, 0, 11, 2, $year ),
                'FIXED_FEAST',
                'WHITE'
            ),
            array
            (
                'saintMartinDePorres',
                'Saint Martin de Porres, Religious',
                mktime (0, 0, 0, 11, 3, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintCharlesBorromeo',
                'Saint Charles Borromeo, Bishop',
                mktime (0, 0, 0, 11, 4, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'dedicationOfTheLateranBasilica',
                'The Dedication of the Lateran Basilica',
                mktime (0, 0, 0, 11, 9, $year ),
                'FIXED_FEAST',
                'WHITE'
            ),
            array
            (
                'saintLeoTheGreat',
                'Saint Leo the Great, Pope and Doctor of the Church',
                mktime (0, 0, 0, 11, 10, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMartinOfTours',
                'aint Martin of Tours, Bishop',
                mktime (0, 0, 0, 11, 11, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJosaphat',
                'Saint Josaphat, Bishop and Martyr',
                mktime (0, 0, 0, 11, 12, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAlbertTheGreat',
                'Saint Albert the Great, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 11, 15, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintMargaretOfScotlant',
                'Saint Margaret of Scotland',
                mktime (0, 0, 0, 11, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintGertrudeTheGreat',
                'Saint Gertrude, Virgin',
                mktime (0, 0, 0, 11, 16, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintElizabethOfHungary',
                'Saint Elizabeth of Hungary, Religious',
                mktime (0, 0, 0, 11, 17, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'dedicationOfTheBasilicasOfSaintsPeterAndPaul',
                'The Dedication of the Basilicas of Saints Peter and Paul, Apostles',
                mktime (0, 0, 0, 11, 18, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'presentationOfTheBlessedVirginMary',
                'The Presentation of the Blessed Virgin Mary',
                mktime (0, 0, 0, 11, 21, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintCecilia',
                'Saint Cecilia, Virgin and Martyr',
                mktime (0, 0, 0, 11, 22, $year ),
                'MEMORIAL',
                'RED'
            ),
            array
            (
                'saintClementI',
                'Saint Clement I, Pope and Martyr',
                mktime (0, 0, 0, 11, 23, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintSaintColumban',
                'Saint Columban, Abbot',
                mktime (0, 0, 0, 11, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAndrewDungLacAndCo',
                'Saint Andrew Dũng-Lạc, Priest, and Companions, Martyrs',
                mktime (0, 0, 0, 11, 24, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintCatherineOfAlexandria',
                'Saint Catherine of Alexandria, Virgin and Martyr',
                mktime (0, 0, 0, 11, 25, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintAndrew',
                'Saint Andrew, Apostle',
                mktime (0, 0, 0, 11, 30, $year ),
                'FEAST_APOSTLE',
                'RED'
            ),

//-----------------------------------
            array
            (
                'saintFrancisXavier',
                'Saint Francis Xavier, Priest',
                mktime (0, 0, 0, 12, 3, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnDamascene',
                'Saint John Damascene, Priest and Doctor of the Church',
                mktime (0, 0, 0, 12, 4, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintNicholas',
                'Saint Nicholas, Bishop',
                mktime (0, 0, 0, 12, 6, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintAmbrose',
                'Saint Ambrose, Bishop and Doctor of the Church',
                mktime (0, 0, 0, 12, 7, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJuanDiego',
                'Saint Juan Diego Cuauhtlatoatzin',
                mktime (0, 0, 0, 12, 9, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintDamasusI',
                'Saint Damasus I, Pope',
                mktime (0, 0, 0, 12, 11, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'ourLadyOfGuadalupe',
                'Our Lady of Guadalupe',
                mktime (0, 0, 0, 12, 12, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintLucyOfSyracuse',
                'Saint Lucy, Virgin and Martyr',
                mktime (0, 0, 0, 12, 13, $year ),
                'MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintJohnOfTheCross',
                'Saint John of the Cross, Priest and Doctor of the Church',
                mktime (0, 0, 0, 12, 14, $year ),
                'MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintPeterCanisius',
                'Saint Peter Canisius, Priest and Doctor of the Church',
                mktime (0, 0, 0, 12, 21, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintJohnOfKanty',
                'Saint John of Kanty, Priest',
                mktime (0, 0, 0, 12, 23, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ),
            array
            (
                'saintStephenTheFirstMartyr',
                'Saint Stephen, The First Martyr',
                mktime (0, 0, 0, 12, 26, $year ),
                'FEAST_MARTYR',
                'RED'
            ),
            array
            (
                'saintJohnTheApostle',
                'Saint John, Apostle and Evangelist',
                mktime (0, 0, 0, 12, 27, $year ),
                'FEAST',
                'RED'
            ),
            array
            (
                'holyInnocents',
                'The Holy Innocents, Martyrs',
                mktime (0, 0, 0, 12, 28, $year ),
                'FEAST_MARTYR',
                'RED'
            ),
            array
            (
                'saintThomasBecket',
                'Saint Thomas Becket, Bishop and Martyr',
                mktime (0, 0, 0, 12, 29, $year ),
                'OPT_MEMORIAL_MARTYR',
                'RED'
            ),
            array
            (
                'saintSylvesterI',
                'Saint Sylvester I, Pope',
                mktime (0, 0, 0, 12, 31, $year ),
                'OPT_MEMORIAL',
                'WHITE'
            ) 
        );

        return ($dates);

    }
