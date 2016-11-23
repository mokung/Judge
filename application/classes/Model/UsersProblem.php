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
        'stage',
    );

    static $primary_key = 'user_id';

    static $table = 'users_problem';

    public $user_id;
    public $problem_id;
    public $stage;

    public static $pass_num_add = 0;    //this is all this stage promblem number


    public static function UniqueRandomNumbersWithinRange($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }


    /*
    author: zhang zexiang
    funtion: get current stage --> problem level
    date: 2016.11.5 14:45
     */
    public static function find_current_problem($user_id, $current_user_stage)
    {


        $query = DB::select('problem_id')->from(static::$table)
            ->where('user_id', '=', $user_id)
            ->where('stage', '=', $current_user_stage);


        $result = $query->execute();
        return $result;
    }

    public static function find_current_all_problem_id($user_id)
    {


        $query = DB::select('problem_id')->from(static::$table)
            ->where('user_id', '=', $user_id);

        $result = $query->execute();
        return $result->as_array();
    }


    public static function find_level_problem($problem_level)
    {


        $query = DB::select()->from('problem')
            ->where('level', '=', $problem_level)
            ->where('defunct', '=', "N");


        $result = $query->execute();
        return $result;
    }


    public static function find_current_problemlist($current_problem)
    {
        $all_stage_problem = array();

        foreach ($current_problem as $key) {

            array_push($all_stage_problem,Model_Problem::find_by_id($key));

        }

        return $all_stage_problem;
    }







    /**
     * 保存当前实例到数据库
     *
     * @return int
     */
    public function save()
    {
        // prepare data
        //        $this->data['update_at'] = PP::format_time();

        // 过滤不存在的数据
        $data = $this->raw_array();

        // else save new record
        $keys   = array_keys($data);
        $values = array_values($data);

        $query  = DB::insert(static::$table, $keys)->values($values);

        $query->execute();
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