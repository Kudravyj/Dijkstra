<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class algorithm extends Controller
{
    public function algorithm()
    {
        function MinimumDistance($result, $resultSet, $columns)
        {
            $INT_MAX = 0x7FFFFFFF;
            $min = $INT_MAX;
            $minIndex = 0;

            for ($v = 0; $v < $columns; ++$v)
            {
                if ($resultSet[$v] == false && $result[$v] <= $min)
                {
                    $min = $result[$v];
                    $minIndex = $v;
                }
            }

            return $minIndex;
        }
        function Dijkstra($graph, $source, $columns){
            $INT_MAX = 0x7FFFFFFF;
            $result = array();
            $resultSet = array();
            for($i = 0; $i < $columns; $i++){
                $result[$i] = $INT_MAX;
                $resultSet[$i] = false;
            }
            $result[$source] = 0;
            for ($count = 0; $count < $columns - 1; ++$count)
            {
                $u = MinimumDistance($result, $resultSet, $columns);
                $resultSet[$u] = true;

                for ($v = 0; $v < $columns; ++$v)
                    if (!$resultSet[$v] && $graph[$u][$v] && $result[$u] != $INT_MAX && $result[$u] + $graph[$u][$v] < $result[$v])
                        $result[$v] = $result[$u] + $graph[$u][$v];
            }
            return view('welcome', compact('result'));
        }
        $graph = array(
            array(0, 4, 0, 0, 0, 0, 0, 8, 0),
            array(4, 0, 8, 0, 0, 0, 0, 11, 0),
            array(0, 8, 0, 7, 0, 4, 0, 0, 2),
            array(0, 0, 7, 0, 9, 14, 0, 0, 0),
            array(0, 0, 0, 9, 0, 10, 0, 0, 0),
            array(0, 0, 4, 0, 10, 0, 2, 0, 0),
            array(0, 0, 0, 14, 0, 2, 0, 1, 6),
            array(8, 11, 0, 0, 0, 0, 1, 0, 7),
            array(0, 0, 2, 0, 0, 0, 6, 7, 0)
        );
        return Dijkstra($graph, 0, 9);
    }
}
