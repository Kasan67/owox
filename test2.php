<?php

function luckyTicket($k)
{
    if ($k % 2 !== 0) {
        return false;
    }
    $half = $k/2;
    $num = str_pad('', $k, "9", STR_PAD_LEFT);

    //set start half+1 for avoid invalid loops
    $start = substr($num, $half)+1;
    //0000 is also lucky;
    $lucky = 1;
    for ($i = $start; $i < $num; $i++) {
        $end = array_sum(str_split(substr($i, -$half)));
        $front = array_sum(str_split(substr($i, 0, -$half)));
        if ($front == $end) {
            $lucky += 1;
        }
    }

    return $lucky;
}