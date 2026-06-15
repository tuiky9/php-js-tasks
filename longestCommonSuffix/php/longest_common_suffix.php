<?php

class Solution {    
    
    public function solution(array $strs): string {       
        if (count($strs) === 0) {
            return "";
        } elseif (count($strs) === 1) {
            return $strs[0];
        }
        
        $minStrLen = strlen($strs[0]);
        
        foreach ($strs as $str) {
            if ($str === "") {
                return "";
            }
            
            if (strlen($str) <= $minStrLen) {
                $minStrLen = strlen($str);
                $minStr = $str;
            }
        }
        
        $result = "";
        for ($i = 1; $i <= $minStrLen; $i++) {
            $char = substr($minStr, -$i, 1);
            foreach ($strs as $str) {
                if (substr($str, -$i, 1) !== $char) {
                    $result = strrev($result);
                    return $result;
                }
            }
            $result .= $char;
        }
    
        $result = strrev($result);        

        return $result;
    }
}
