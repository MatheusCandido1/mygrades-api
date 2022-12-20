<?php

namespace App\Http\Helpers;

class Helper {
    public static function getGradeFromPoints($points)
    {
        if ($points >= 93) {
            return 'A';
        } elseif ($points < 93 && $points >= 90) {
            return 'A-';
        } elseif ($points < 90 && $points >= 87) {
            return 'B+';
        } elseif ($points < 87 && $points >= 83) {
            return 'B';
        } elseif ($points < 83 && $points >= 80) {
            return 'B-';
        } elseif ($points < 80 && $points >= 77) {
            return 'C+';
        } elseif ($points < 77 && $points >= 73) {
            return 'C';
        } elseif ($points < 73 && $points >= 70) {
            return 'C-';
        } elseif ($points < 70 && $points >= 67) {
            return 'D+';
        } elseif ($points < 67 && $points >= 63) {
            return 'D';
        } elseif ($points < 63 && $points >= 60) {
            return 'D-';
        } else {
            return 'F';
        }
    }

    public static function getPointsFromGrade($grade) {
        if ($grade == 'A') {
            return 93;
        } else if ($grade == 'A-') {
            return 90;
        } else if ($grade == 'B+') {
            return 87;
        } else if ($grade == 'B') {
            return 83;
        } else if ($grade == 'B-') {
            return 80;
        } else if ($grade == 'C+') {
            return 77;
        } else if ($grade == 'C') {
            return 73;
        } else if ($grade == 'C-') {
            return 70;
        } else if ($grade == 'D+') {
            return 67;
        } else if ($grade == 'D') {
            return 63;
        } else if ($grade == 'D-') {
            return 60;
        } else if ($grade == 'F') {
            return 0;
        }
    }

    public static function getGPAFromGrade($grade) {
        if ($grade == 'A') {
            return 4;
        } else if ($grade == 'A-') {
            return 3.7;
        } else if ($grade == 'B+') {
            return 3.3;
        } else if ($grade == 'B') {
            return 3;
        } else if ($grade == 'B-') {
            return 2.7;
        } else if ($grade == 'C+') {
            return 2.3;
        } else if ($grade == 'C') {
            return 2;
        } else if ($grade == 'C-') {
            return 1.7;
        } else if ($grade == 'D+') {
            return 1.3;
        } else if ($grade == 'D') {
            return 1;
        } else if ($grade == 'D-') {
            return 0.7;
        } else if ($grade == 'F') {
            return 0;
        }
    }
}

?>
