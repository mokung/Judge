<?php

/**
 * @author: zhang ze xiang
 * Date: 4/11/2016
 * Time: 11:59 AM
 */

class Model_UsersProblem extends Model_Base
{
    static $cols = array(
        'user_id',
        'problem_id',
        'level',
    );

    static $primary_key = 'user_id';

    static $table = 'users_problem';

    public $user_id;
    public $problem_id;
    public $level;


    function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }


    /*
    author: zhang zexiang
    funtion: get current stage --> problem level
    date: 2016.11.5 14:45
     */
    public static function find_current_problem($user_id, $current_problem_level)
    {


        $query = DB::select('problem_id')->from(static::$table)
            ->where('user_id', '=', $user_id)
            ->where('level', '=', $current_problem_level);


        $result = $query->execute();
        return $result;
    }


    public static function find_level_problem($problem_level)
    {


        $query = DB::select()->from('problem')
            ->where('level', '=', $problem_level);


        $result = $query->execute();
        return $result;
    }




    protected function initial_data()
    {
        $this->title       = '';
        $this->start_time  = '';
        $this->end_time    = '';
        $this->defunct     = self::DEFUNCT_NO;
        $this->description = '';
        $this->private     = 1;
    }

    public function validate()
    {}
}