<?php

namespace src;

class Help
{
    /**
     * @param $n ($n = null)
     * Print teg <br> * n
     */
    public static function br($n = null)
    {
        for ($i = 0; $i <= $n; $i++) {
            echo "<pre>".PHP_EOL."</pre>";
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
    public static function see(array $array)
    {
        echo '<pre>';
        /** @var array $array */
        print_r($array);
        echo '</pre>';
    }

}
