<?php

/**
 * Created by PhpStorm.
 * User: Will
 * Date: 24/05/2017
 * Time: 12:08
 */
class Calcul
{
    /**
     * @return int
     */
    static public function add()
    {
        $result = 0;
        foreach (func_get_args() as $argv) {
            $result += $argv;
        }

        return $result;
    }

    /**
     * @return int
     */
    static public function minus()
    {
        $args = func_get_args();
        $result = $args[0];
        array_shift($args);
        foreach ($args as $argv) {
            $result -= $argv;
        }

        return $result;
    }

    /**
     * @return int
     */
    static public function multiply()
    {
        $args = func_get_args();
        $result = $args[0];
        array_shift($args);
        foreach ($args as $argv) {
            $result *= $argv;
        }

        return $result;
    }

    /**
     * @return float|int
     */
    static public function divide()
    {
        $args = func_get_args();
        $result = $args[0];
        array_shift($args);
        foreach ($args as $argv) {
            $result /= $argv;
        }

        return $result;
    }
}