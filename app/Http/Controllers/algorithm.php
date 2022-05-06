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
            return view('home', compact('result'));
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
    public function custom()
    {
        $data = request()->validate([
            'number1' => 'required',
            'number2' => 'required',
            'number3' => 'required',
            'number4' => 'required',
            'number5' => 'required',
            'number6' => 'required',
            'number7' => 'required',
            'number8' => 'required',
            'number9' => 'required',
            'number10' => 'required',
            'number11' => 'required',
            'number12' => 'required',
            'number13' => 'required',
        ]);
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
            return view('custom/custom', compact('result'));
        }
        $graph = array(
            array(0, $data['number2'], 0, $data['number1'], 0, 0, 0, 0, 0),
            array($data['number2'], 0, $data['number5'], 0, $data['number4'], 0, 0, 0, 0),
            array(0, $data['number5'], 0, 0, 0, $data['number7'], 0, 0, 0),
            array($data['number1'], 0, 0, 0, $data['number3'], 0, $data['number11'], 0, 0),
            array(0, $data['number4'], 0, $data['number3'], 0, $data['number6'], 0, $data['number8'], 0),
            array(0, 0, $data['number7'], 0, $data['number6'], 0, 0, $data['number9'], 0),
            array(0, 0, 0, $data['number11'], 0, 0, 0, $data['number10'], $data['number13']),
            array(0, 0, 0, 0, $data['number8'], $data['number9'], $data['number10'], 0, $data['number12']),
            array(0, 0, 0, 0, 0, 0, $data['number13'], $data['number12'], 0)
        );
        return Dijkstra($graph, 0, 9);
    }
    public function customShow($result, $data)
    {
        
    }
}
