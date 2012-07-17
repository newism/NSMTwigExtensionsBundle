<?php

namespace NSM\Bundle\TwigExtensionsBundle\Twig\Extension;

class SecondsToTime extends \Twig_Extension {

    public function getFilters() {
        return array(
            'secondsToTime'  => new \Twig_Filter_Method($this, 'secondsToTime'),
            'secondsToTimeWithSeconds'  => new \Twig_Filter_Method($this, 'secondsToTimeWithSeconds'),
        );
    }

    public function secondsToTime($secs, $include_seconds = false) {

        if(false == $secs) {
            return ($include_seconds) ? '0:00:00' : '0:00';
        }

        $originalSecs = $secs;

        if($secs < 0){
            $secs = $secs * -1;
        }

        $vals = array(
            'h' => floor($secs / 3600),
            'm' => sprintf("%02d", $secs / 60 % 60), 
        ); 

        if($include_seconds){
            $vals['s'] = sprintf("%02d", $secs % 60);
        }

        $negative = true;
        if(
            (true == $include_seconds && $originalSecs >= 0)
            || (false == $include_seconds && $originalSecs >= -60)
        ) {
            $negative = false;
        }

        return (($negative) ? '-' : '') . join(':', $vals); 
    }

    public function secondsToTimeWithSeconds($secs) {
        return $this->secondsToTime($secs,true);
    }

    public function getName()
    {
        return 'seconds_to_time';
    }

}