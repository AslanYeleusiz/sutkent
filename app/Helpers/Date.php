<?php

namespace App\Helpers;

class Date
{
    public static function dmYKZ($date){
        $date = strtotime($date);
        $day = date('d',$date);
        $year = date('Y',$date);
        $month = date('m',$date);
        $hour = date('H:i',$date);
        switch ($month){
            case 1:
                $month = 'January';
                break;
            case 2:
                $month = 'February';
                break;
            case 3:
                $month = 'March';
                break;
            case 4:
                $month = 'April';
                break;
            case 5:
                $month = 'May';
                break;
            case 6:
                $month = 'June';
                break;
            case 7:
                $month = 'July';
                break;
            case 8:
                $month = 'August';
                break;
            case 9:
                $month = 'September';
                break;
            case 10:
                $month = 'October';
                break;
            case 11:
                $month = 'November';
                break;
            case 12:
                $month = 'December';
                break;
        }
        return "{$day} ".__('site.'.$month)." {$year}, {$hour}";
    }

    public static function monthKz($month): string
    {
        switch ($month){
            case 1:
                return 'Қаңтар';
            case 2:
                return 'Ақпан';
            case 3:
                return 'Наурыз';
            case 4:
                return 'Сәуір';
            case 5:
                return 'Мамыр';
            case 6:
                return 'Маусым';
            case 7:
                return 'Шілде';
            case 8:
                return 'Тамыз';
            case 9:
                return 'Қырқүйек';
            case 10:
                return 'Қазан';
            case 11:
                return 'Қараша';
            case 12:
                return 'Желтоқсан';
            default:
                return 'Қаңтар';
        }
    }
}
