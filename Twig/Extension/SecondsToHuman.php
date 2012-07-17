<?php

namespace NSM\Bundle\TwigExtensionsBundle\Twig\Extension;

class SecondsToHuman extends \Twig_Extension {

    public function getFilters() {
        return array(
            'secondsToHuman'  => new \Twig_Filter_Method($this, 'secondsToHuman'),
        );
    }

    public function secondsToHuman($secs) {

        if(!$secs) return 0;

        $vals = array(
            'w' => (int) ($secs / 86400 / 7), 
            'd' => $secs / 86400 % 7, 
            'h' => $secs / 3600 % 24, 
            'm' => $secs / 60 % 60, 
            's' => $secs % 60
        ); 

        $ret = array(); 

        $added = false; 
        foreach ($vals as $k => $v) { 
            if ($v > 0 || $added) { 
                $added = true; 
                $ret[] = $v . $k; 
            } 
        } 
        return join(' ', $ret); 
    }

    public function getName()
    {
        return 'seconds_to_human';
    }

}