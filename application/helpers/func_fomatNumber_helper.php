<?
    function fomatNumber($number)
    {
        return str_replace(',','.',number_format($number));
    }
?>