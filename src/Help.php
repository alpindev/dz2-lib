<?php

namespace src;

class Help
{
    /**
     * @param $n
     * Print teg <br> * n
     */
    public static function br($n)
    {
        for ($i = 0; $i < $n; $i++) {
            echo "<pre>".PHP_EOL.PHP_EOL."</pre>";
        };
    }

    /**
     * Print teg <hr>
     */
    public static function hr()
    {
        echo '<hr>';
    }

    /**
     * @param $array
     * Print_r ($array);
     */
    public static function see($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }

}
