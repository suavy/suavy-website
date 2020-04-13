<?php

    function fRobot(string $stringToF)
    {
        $stringF = "<span style='unicode-bidi:bidi-override; direction:rtl;'>";
        $stringF .= strrev($stringToF);
        $stringF .= '</span>';

        return $stringF;
    }
