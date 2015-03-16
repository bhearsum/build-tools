<?php
require_once dirname(__FILE__).'/productHistory.class.php';

/**
 * Dates of release for certain Firefox versions, mostly obtained from
 * http://en.wikipedia.org/wiki/History_of_Mozilla_Firefox#Release_history
 */
class firefoxHistory extends productHistory {
    // Major releases
    var $major_releases = array(
            '1.0' => '2004-11-09',
            '1.5' => '2005-11-29',
            '2.0' => '2006-10-24',
            '3.0' => '2008-06-17',
            '3.5' => '2009-06-30',
            '3.6' => '2010-01-21',
            '4.0' => '2011-03-22',
            '5.0' => '2011-06-21',
            '6.0' => '2011-08-16',
            '7.0' => '2011-09-27',
            '8.0' => '2011-11-08',
            '9.0' => '2011-12-20',
            '10.0' => '2012-01-31',
            '11.0' => '2012-03-13',
            '12.0' => '2012-04-24',
            '13.0' => '2012-06-05',
            '14.0.1' => '2012-07-17',
            '15.0' => '2012-08-28',
            '16.0' => '2012-10-09',
            '17.0' => '2012-11-20',
            '18.0' => '2013-01-08',
            '19.0' => '2013-02-19',
            '20.0' => '2013-04-02',
            '21.0' => '2013-05-14',
            '22.0' => '2013-06-25',
            '23.0' => '2013-08-06',
            '24.0' => '2013-09-17',
            '25.0' => '2013-10-29',
            '26.0' => '2013-12-10',
            '27.0' => '2014-02-04',
            '28.0' => '2014-03-18',
            '29.0' => '2014-04-29',
            '30.0' => '2014-06-10',
            '31.0' => '2014-07-22',
            '32.0' => '2014-09-02',
            // NEXT_MAJOR
            );
            // Do not remove NEXT_MAJOR

    // Security and stability releases
    var $stability_releases = array(
            '1.0.1'    => '2005-02-24',
            '1.0.2'    => '2005-03-23',
            '1.0.3'    => '2005-04-15',
            '1.0.4'    => '2005-05-11',
            '1.0.5'    => '2005-07-12',
            '1.0.6'    => '2005-07-19',
            '1.0.7'    => '2005-09-20',
            '1.0.8'    => '2006-04-13',
            '1.5.0.1'  => '2006-02-01',
            '1.5.0.2'  => '2006-04-13',
            '1.5.0.3'  => '2006-05-02',
            '1.5.0.4'  => '2006-06-01',
            '1.5.0.5'  => '2006-07-26',
            '1.5.0.6'  => '2006-08-02',
            '1.5.0.7'  => '2006-09-14',
            '1.5.0.8'  => '2006-11-07',
            '1.5.0.9'  => '2006-12-19',
            '1.5.0.10' => '2007-02-23',
            '1.5.0.11' => '2007-03-20',
            '1.5.0.12' => '2007-05-30',
            '2.0.0.1'  => '2006-12-19',
            '2.0.0.2'  => '2007-02-23',
            '2.0.0.3'  => '2007-03-20',
            '2.0.0.4'  => '2007-05-30',
            '2.0.0.5'  => '2007-07-17',
            '2.0.0.6'  => '2007-07-30',
            '2.0.0.7'  => '2007-09-18',
            '2.0.0.8'  => '2007-10-18',
            '2.0.0.9'  => '2007-11-01',
            '2.0.0.10' => '2007-11-26',
            '2.0.0.11' => '2007-11-30',
            '2.0.0.12' => '2008-02-07',
            '2.0.0.13' => '2008-03-25',
            '2.0.0.14' => '2008-04-16',
            '2.0.0.15' => '2008-07-01',
            '2.0.0.16' => '2008-07-15',
            '2.0.0.17' => '2008-09-23',
            '2.0.0.18' => '2008-11-12',
            '2.0.0.19' => '2008-12-16',
            '2.0.0.20' => '2008-12-18',
            '3.0.1'    => '2008-07-16',
            '3.0.2'    => '2008-09-23',
            '3.0.3'    => '2008-09-26',
            '3.0.4'    => '2008-11-12',
            '3.0.5'    => '2008-12-16',
            '3.0.6'    => '2009-02-03',
            '3.0.7'    => '2009-03-04',
            '3.0.8'    => '2009-03-27',
            '3.0.9'    => '2009-04-21',
            '3.0.10'   => '2009-04-27',
            '3.0.11'   => '2009-06-11',
            '3.0.12'   => '2009-07-21',
            '3.0.13'   => '2009-08-03',
            '3.0.14'   => '2009-09-09',
            '3.0.15'   => '2009-10-27',
            '3.0.16'   => '2009-12-15',
            '3.0.17'   => '2010-01-05',
            '3.0.18'   => '2010-02-17',
            '3.0.19'   => '2010-03-30',
            '3.5.1'    => '2009-07-17',
            '3.5.2'    => '2009-08-03',
            '3.5.3'    => '2009-09-09',
            '3.5.4'    => '2009-10-27',
            '3.5.5'    => '2009-11-05',
            '3.5.6'    => '2009-12-15',
            '3.5.7'    => '2010-01-05',
            '3.5.8'    => '2010-02-17',
            '3.5.9'    => '2010-03-30',
            '3.5.10'   => '2010-06-22',
            '3.5.11'   => '2010-07-20',
            '3.5.12'   => '2010-09-07',
            '3.5.13'   => '2010-09-15',
            '3.5.14'   => '2010-10-19',
            '3.5.15'   => '2010-10-27',
            '3.5.16'   => '2010-12-09',
            '3.5.17'   => '2011-03-01',
            '3.5.18'   => '2011-03-22',
            '3.5.19'   => '2011-04-28',
            '3.6.2'    => '2010-03-22',
            '3.6.3'    => '2010-04-01',
            '3.6.4'    => '2010-06-22',
            '3.6.6'    => '2010-06-26',
            '3.6.7'    => '2010-07-20',
            '3.6.8'    => '2010-07-23',
            '3.6.9'    => '2010-09-07',
            '3.6.10'   => '2010-09-15',
            '3.6.11'   => '2010-10-19',
            '3.6.12'   => '2010-10-27',
            '3.6.13'   => '2010-12-09',
            '3.6.14'   => '2011-03-01',
            '3.6.15'   => '2011-03-04',
            '3.6.16'   => '2011-03-22',
            '3.6.17'   => '2011-04-28',
            '3.6.18'   => '2011-06-21',
            '3.6.19'   => '2011-07-11',
            '3.6.20'   => '2011-08-16',
            '3.6.21'   => '2011-08-30',
            '3.6.22'   => '2011-09-06',
            '3.6.23'   => '2011-09-27',
            '3.6.24'   => '2011-11-08',
            '3.6.25'   => '2011-12-20',
            '4.0.1'    => '2011-04-28',
            '5.0.1'    => '2011-07-11',
            '6.0.1'    => '2011-08-30',
            '6.0.2'    => '2011-09-06',
            '7.0.1'    => '2011-09-29',
            '8.0.1'    => '2011-11-21',
            '9.0.1'    => '2011-12-21',
            '3.6.26'   => '2012-01-31',
            '10.0.1'    => '2012-02-10',
            '10.0.2'    => '2012-02-16',
            '3.6.27'   => '2012-02-17',
            '10.0.3'    => '2012-03-13',
            '3.6.28'   => '2012-03-13',
            '10.0.4'    => '2012-04-24',
            '10.0.5'    => '2012-06-05',
            '13.0.1'    => '2012-06-15',
            '10.0.6'    => '2012-07-17',
            '10.0.7'    => '2012-08-28',
            '15.0.1'    => '2012-09-06',
            '10.0.8'    => '2012-10-09',
            '16.0.1'    => '2012-10-11',
            '10.0.9'    => '2012-10-12',
            '16.0.2'    => '2012-10-26',
            '10.0.10'   => '2012-10-26',
            '10.0.11'   => '2012-11-20',
            '17.0.1'    => '2012-11-30',
            '10.0.12'   => '2013-01-08',
            '17.0.2'    => '2013-01-08',
            '18.0.1' => '2013-01-18',
            '18.0.2' => '2013-02-05',
            '17.0.3' => '2013-02-19',
            '19.0.1' => '2013-02-27',
            '17.0.4' => '2013-03-07',
            '19.0.2' => '2013-03-07',
            '17.0.5' => '2013-04-02',
            '20.0.1' => '2013-04-11',
            '17.0.6' => '2013-05-14',
            '17.0.7' => '2013-06-25',
            '17.0.8' => '2013-08-06',
            '23.0.1' => '2013-08-16',
            '17.0.9' => '2013-09-17',
            '17.0.10' => '2013-10-29',
            '24.1.0'  =>  '2013-10-29',
            '25.0.1' => '2013-11-15',
            '24.1.1' => '2013-11-15',
            '17.0.11' => '2013-11-15',
            '24.2.0' => '2013-12-10',
            '24.3.0' => '2014-02-04',
            '27.0.1' => '2014-02-14',
            '24.4.0' => '2014-03-18',
            '24.5.0' => '2014-04-29',
            '29.0.1' => '2014-05-09',
            '24.6.0' => '2014-06-10',
            '24.7.0' => '2014-07-22',
            '24.8.0' => '2014-09-02',
            '31.1.0' => '2014-09-02',
            '32.0.1' => '2014-09-12',
            '32.0.2' => '2014-09-18',
            '32.0.3' => '2014-09-24',
            '31.1.1' => '2014-09-24',
            '24.8.0' => '2014-09-24',
            // NEXT_STABILITY
            );
            // Do not remove NEXT_STABILITY

    // Development releases - betas and release candidates only
    var $development_releases = array(
            '1.0rc1' => '2004-10-27',
            '1.0rc2' => '2004-11-03',
            '1.5rc1' => '2005-11-01',
            '1.5rc2' => '2005-11-10',
            '1.5rc3' => '2005-11-17',
            '2.0b1'  => '2006-07-12',
            '2.0b2'  => '2006-08-31',
            '2.0rc1' => '2006-09-26',
            '2.0rc2' => '2006-10-06',
            '2.0rc3' => '2007-10-16',
            '3.0b1'  => '2007-11-19',
            '3.0b2'  => '2007-12-18',
            '3.0b3'  => '2008-02-12',
            '3.0b4'  => '2008-03-10',
            '3.0b5'  => '2008-04-02',
            '3.0rc1' => '2008-05-16',
            '3.0rc2' => '2008-06-03',
            '3.1b1'  => '2008-08-14',
            '3.1b2'  => '2008-12-08',
            '3.1b3'  => '2009-03-12',
            '3.5b4'  => '2009-04-27',
            '3.5rc2' => '2009-06-19',
            '3.5rc3' => '2009-06-24',
            /* Missing some versions here */
            '3.6b1' => '2009-10-30',
            '3.6b2' => '2009-11-10',
            '3.6b3' => '2009-11-17',
            '3.6b4' => '2009-11-26',
            '3.6b5' => '2009-12-17',
            '3.6rc1' => '2010-01-08',
            '3.6rc2' => '2010-01-17',
            '3.6.3plugin1' => '2010-04-08',
            '3.6.4build1' => '2010-04-20',
            '3.6.4build3' => '2010-05-04',
            '3.6.4build4' => '2010-05-14',
            '3.6.4build5' => '2010-05-26',
            '3.6.4build6' => '2010-05-28',
            '3.6.4build7' => '2010-06-14',
            '3.6.7build1' => '2010-07-02',
            '4.0b1' => '2010-07-06',
            '4.0b2' => '2010-07-27',
            '4.0b3' => '2010-08-11',
            '4.0b4' => '2010-08-24',
            '4.0b5' => '2010-09-07',
            '4.0b6' => '2010-09-14',
            '4.0b7' => '2010-11-10',
            '4.0b8' => '2010-12-22',
            '4.0b9' => '2011-01-14',
            '4.0b10' => '2011-01-25',
            '4.0b11' => '2011-02-08',
            '4.0b12' => '2011-02-25',
            '4.0rc1' => '2011-03-09',
            '4.0rc2' => '2011-03-18',
            // 5.0 b1 was "fake" / just a snapshot of Aurora
            // Going to set the date to b2, which was the first "real"
            // beta
            '5.0b1' => '2011-05-20',
            '5.0b2' => '2011-05-20',
            '5.0b3' => '2011-06-01',
            // No b4
            '5.0b5' => '2011-06-09',
            '5.0b6' => '2011-06-14',
            '5.0b7' => '2011-06-15',
            '6.0b1' => '2011-07-08',
            '6.0b2' => '2011-07-15',
            '6.0b3' => '2011-07-25',
            '6.0b4' => '2011-08-01',
            '6.0b5' => '2011-08-05',
            '7.0b1' => '2011-08-18',
            '7.0b2' => '2011-08-26',
            // No b3 released
            '7.0b4' => '2011-09-06',
            '7.0b5' => '2011-09-09',
            '7.0b6' => '2011-09-19',
            '8.0b1' => '2011-09-29',
            '8.0b2' => '2011-10-10',
            '8.0b3' => '2011-10-14',
            '8.0b4' => '2011-10-21',
            '8.0b5' => '2011-10-28',
            '8.0b6' => '2011-11-03',
            '9.0b1' => '2011-11-10',
            '9.0b2' => '2011-11-17',
            '9.0b3' => '2011-11-25',
            '9.0b4' => '2011-12-02',
            '9.0b5' => '2011-12-09',
            '9.0b6' => '2011-12-15',
            '10.0b1' => '2011-12-22',
            '10.0b2' => '2011-12-30',
            '10.0b3' => '2012-01-06',
            '10.0b4' => '2012-01-13',
            '10.0b5' => '2012-01-20',
            '10.0b6' => '2012-01-26',
            '11.0b1' => '2012-02-03',
            '11.0b2' => '2012-02-10',
            '11.0b3' => '2012-02-17',
            '11.0b4' => '2012-02-24',
            '11.0b5' => '2012-03-02',
            '11.0b6' => '2012-03-07',
            '11.0b7' => '2012-03-09',
            '11.0b8' => '2012-03-11',
            '12.0b1' => '2012-03-16',
            '12.0b2' => '2012-03-22',
            '12.0b3' => '2012-03-30',
            '12.0b4' => '2012-04-05',
            '12.0b5' => '2012-04-13',
            '12.0b6' => '2012-04-19',
            '13.0b1' => '2012-04-26',
            '13.0b2' => '2012-05-03',
            '13.0b3' => '2012-05-11',
            '13.0b4' => '2012-05-18',
            '13.0b5' => '2012-05-25',
            '13.0b6' => '2012-05-29',
            '13.0b7' => '2012-06-01',
            '14.0b6' => '2012-06-07',
            '14.0b7' => '2012-06-14',
            '14.0b8' => '2012-06-21',
            '14.0b9' => '2012-06-25',
            '14.0b10' => '2012-06-29',
            '14.0b11' => '2012-07-06',
            '14.0b12' => '2012-07-11',
            '15.0b1' => '2012-07-19',
            '15.0b2' => '2012-07-27',
            '15.0b3' => '2012-08-02',
            '15.0b4' => '2012-08-10',
            '15.0b5' => '2012-08-17',
            '15.0b6' => '2012-08-22',
            '16.0b1' => '2012-08-30',
            '16.0b2' => '2012-09-07',
            '16.0b3' => '2012-09-13',
            '16.0b4' => '2012-09-21',
            '16.0b5' => '2012-09-27',
            '16.0b6' => '2012-10-03',
            '17.0b1' => '2012-10-11',
            '17.0b2' => '2012-10-22',
            '17.0b3' => '2012-10-24',
            '17.0b4' => '2012-11-02',
            '17.0b5' => '2012-11-08',
            '17.0b6' => '2012-11-14',
            '18.0b1' => '2012-11-26',
            '18.0b2' => '2012-11-29',
            '18.0b3' => '2012-12-06',
            '18.0b4' => '2012-12-14',
            '18.0b5' => '2012-12-21',
            '18.0b6' => '2012-12-28',
            '18.0b7' => '2013-01-02',
            '19.0b1' => '2013-01-10',
            '19.0b2' => '2013-01-17',
            '19.0b3' => '2013-01-25',
            '19.0b4' => '2013-01-31',
            '19.0b5' => '2013-02-07',
            '19.0b6' => '2013-02-13',
            '20.0b1' => '2013-02-22',
            '20.0b2' => '2013-02-28',
            '20.0b3' => '2013-03-06',
            '20.0b4' => '2013-03-08',
            '20.0b5' => '2013-03-14',
            '20.0b6' => '2013-03-21',
            '21.0b1' => '2013-04-04',
            '21.0b2' => '2013-04-09',
            '21.0b3' => '2013-04-18',
            '21.0b4' => '2013-04-25',
            '21.0b5' => '2013-04-29',
            '21.0b6' => '2013-05-02',
            '21.0b7' => '2013-05-08',
            '22.0b1' => '2013-05-16',
            '22.0b2' => '2013-05-23',
            '22.0b3' => '2013-05-30',
            '22.0b4' => '2013-06-06',
            '22.0b5' => '2013-06-13',
            '22.0b6' => '2013-06-19',
            '23.0b1' => '2013-06-27',
            '23.0b2' => '2013-07-02',
            '23.0b3' => '2013-07-04',
            '23.0b4' => '2013-07-09',
            '23.0b5' => '2013-07-12',
            '23.0b6' => '2013-07-16',
            '23.0b7' => '2013-07-19',
            '23.0b8' => '2013-07-23',
            '23.0b9' => '2013-07-26',
            '23.0b10' => '2013-07-30',
            '24.0b1' => '2013-08-09',
            '24.0b2' => '2013-08-13',
            '24.0b3' => '2013-08-16',
            '24.0b4' => '2013-08-20',
            '24.0b5' => '2013-08-23',
            '24.0b6' => '2013-08-27',
            '24.0b7' => '2013-08-30',
            '24.0b8' => '2013-09-03',
            '24.0b9' => '2013-09-06',
            '24.0b10' => '2013-09-10',
            '25.0b1' => '2013-09-18',
            '25.0.1' => '2013-11-14',
            '25.0b2' => '2013-09-24',
            '25.0.1' => '2013-11-14',
            '25.0b3' => '2013-09-27',
            '25.0.1' => '2013-11-14',
            '25.0b4' => '2013-10-02',
            '25.0.1' => '2013-11-14',
            '25.0b6' => '2013-10-08',
            '25.0.1' => '2013-11-14',
            '25.0b7' => '2013-10-11',
            '25.0.1' => '2013-11-14',
            '25.0b8' => '2013-10-15',
            '25.0.1' => '2013-11-14',
            '25.0b9' => '2013-10-18',
            '25.0.1' => '2013-11-14',
            '25.0b10' => '2013-10-22',
            '25.0.1' => '2013-11-14',
            '25.0b11' => '2013-10-24',
            '25.0.1' => '2013-11-14',
            '25.0b12' => '2013-10-26',
            '25.0.1' => '2013-11-14',
            '26.0b1' => '2013-10-31',
            '26.0b2' => '2013-11-05',
            '26.0b3' => '2013-11-08',
            '26.0b4' => '2013-11-12',
            '26.0b5' => '2013-11-15',
            '26.0b6' => '2013-11-19',
            '26.0b7' => '2013-11-23',
            '26.0b8' => '2013-11-26',
            '26.0b10' => '2013-12-03',
            '27.0b1' => '2013-12-12',
            '27.0b2' => '2013-12-17',
            '27.0b4' => '2014-01-07',
            '27.0b5' => '2014-01-10',
            '27.0b6' => '2014-01-14',
            '27.0b7' => '2014-01-17',
            '27.0b8' => '2014-01-21',
            '27.0b9' => '2014-01-24',
            '28.0b1' => '2014-02-06',
            '28.0b2' => '2014-02-11',
            '28.0b3' => '2014-02-14',
            '28.0b4' => '2014-02-19',
            '28.0b6' => '2014-02-25',
            '28.0b7' => '2014-02-28',
            '28.0b8' => '2014-03-04',
            '28.0b9' => '2014-03-07',
            '29.0b1' => '2014-03-20',
            '29.0b2' => '2014-03-25',
            '29.0b3' => '2014-03-28',
            '29.0b4' => '2014-04-01',
            '29.0b5' => '2014-04-04',
            '29.0b6' => '2014-04-08',
            '29.0b7' => '2014-04-11',
            '29.0b8' => '2014-04-15',
            '29.0b9' => '2014-04-18',
            '30.0b1' => '2014-05-01',
            '30.0b2' => '2014-05-06',
            '30.0b3' => '2014-05-09',
            '30.0b4' => '2014-05-14',
            '30.0b5' => '2014-05-16',
            '30.0b6' => '2014-05-21',
            '30.0b7' => '2014-05-23',
            '30.0b8' => '2014-05-28',
            '30.0b9' => '2014-05-30',
            '31.0b1' => '2014-06-12',
            '31.0b2' => '2014-06-18',
            '31.0b4' => '2014-06-24',
            '31.0b5' => '2014-06-27',
            '31.0b6' => '2014-07-01',
            '31.0b7' => '2014-07-04',
            '31.0b8' => '2014-07-08',
            '31.0b9' => '2014-07-11',
            '32.0b1' => '2014-07-24',
            '32.0b2' => '2014-07-29',
            '32.0b3' => '2014-08-01',
            '32.0b4' => '2014-08-05',
            '32.0b5' => '2014-08-08',
            '32.0b6' => '2014-08-12',
            '32.0b7' => '2014-08-15',
            '32.0b8' => '2014-08-19',
            '32.0b9' => '2014-08-22',
            '33.0b1' => '2014-09-04',
            '33.0b2' => '2014-09-09',
            '33.0b3' => '2014-09-12',
            '33.0b4' => '2014-09-17',
            '33.0b5' => '2014-09-19',
            '33.0b6' => '2014-09-23',
            '33.0b7' => '2014-09-24',
            '33.0b8' => '2014-09-30',
            // NEXT_DEVELOPMENT
            );
            // Do not remove NEXT_DEVELOPMENT
}

?>
