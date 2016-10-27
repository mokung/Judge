<?php defined('SYSPATH') or die('No direct script access.');
/**
 * user model for hust online judge
 *
 * @author freefcw
 */
class Model_Situation extends Model_Base
{
    static $cols = array(
        'user_id',
        'date',
        'group_id',
        'submited',
        'score',
        'staged',
        'during_time',
        'defunct',

    );

//!!!!!!!!!!!!!  when change "ddd"(not same of $cols), it's could save new data, but change the same , it's not to save new , but could show list , and this function not use show list , so just soso
            static $primary_key = 'user_id';



    static $table = 'users_status';

    public $user_id;
    public $date;
    public $group_id;
    public $submited;
    public $score;
    public $staged;
    public $during_time;
    public $defunct;




    // public static function oneday_message_from_solution()
    // {

    //     $oneday = date("Y-m-d").'%';
    //     $query = DB::select()->from('solution')
    //         ->where('in_date', 'LIKE', $oneday)
    //         ->limit(100);

    //     $result = $query->execute();

    //     return $result->as_array();

    // }

    public static function get_oneday_userdetail($user_id)
    {
        return Model_User::find_by_username($user_id);

    }


    public static function get_oneday_userid($result)
    {

        $user_id_array=array();

        $user_id_date = array();


        foreach ($result as $line) {

            array_push($user_id_array, $line->user_id);
            // array_push($user_id_date, $line->user_id);

        }

         $user_id_array = array_unique($user_id_array);



         // return $user_id_date;
         // return $user_id_array;

         $n = 0;

        foreach ($result as $each_line) {

            $n += 1;

            foreach ($user_id_array as $key) {

                if($each_line->user_id == $key)
                {


                    if(array_key_exists($key, $user_id_date))
                    {


                        array_push($user_id_date[$key],date('H:i',strtotime($each_line->in_date)));


                    }else{


                        $user_id_date += [$key => array(date('H:i',strtotime($each_line->in_date)))];

                    }
                }
            }


        }

        return $user_id_date;
    }





  /**
     * @param       $text
     * @param       $area
     * @param array $orderby
     * @param bool  $show_all
     *
     * @return Model_Problem[]
     */
    public static function search($text, $area, $orderby = array(), $show_all=false)
    {
        $term = "%{$text}%";
        $query = DB::select()->from('solution')
            ->where($area, 'LIKE', $term)
            ->limit(100);

        foreach($orderby as $key => $order)
        {
            $query->order_by($key, $order);
        }

        if ( ! $show_all )
            $query->where('defunct', '=', self::DEFUNCT_NO);

        $ret = $query->as_object(get_called_class())->execute();

        return $ret->as_array();
    }

    /**
     * proxy to rejudge problem
     *
     * @return object
     */
    public function rejudge()
    {
        return Model_Solution::rejudge_problem($this->problem_id);
    }

    /**
     * status fro problem summary
     *
     * @return array
     */
    public function summary()
    {
        return Model_Solution::summary_for_problem($this->problem_id);
    }

    /**
     * get number of volumes
     *
     * @return float
     */
    public static function number_of_volume()
    {
        $filter = self::default_filter();

        $number_of_problems = Model_Situation::count($filter);
        $total_page = ceil( intval($number_of_problems) / OJ::per_page );

        return $total_page;
    }

    /**
     * problem list for volume
     *
     * @param int $volume page for volume
     *
     * @return Model_Problem[]
     */
    public static function situation_for_volume($volume)
    {
        $orderby = array(
            Model_Situation::$primary_key => Model_Base::ORDER_ASC
        );
        $filter = self::default_filter();
        return Model_Situation::find($filter, $volume, OJ::per_page, $orderby);
    }

    /**
     * default filter, with default
     *
     * @return array
     */
    public static function default_filter()
    {
        return $filter = array(
            'defunct' => Model_Base::DEFUNCT_NO
        );
    }

    /**
     * @param Model_User $user
     *
     * @return bool
     */
    public function can_user_access($user)
    {
        if  ( ! $this->is_defunct() ) return true;
        if ($user AND $user->is_admin()) return true;
        return false;
    }

    /**
     * is problem special judge
     * @return bool
     */
    public function is_special_judge()
    {
        return $this->spj == '1';
    }

    /**
     * best solutions for problem
     *
     * @param int $page
     * @param int $limit
     *
     * @return Model_Solution[]
     */
    public function best_solution($page=0, $limit=50)
    {
        return Model_Solution::solution_by_rank($this->problem_id, $page, $limit);
    }

    public function have_new_solution()
    {
        $this->submit = $this->submit + 1;
        $this->save();
    }

    public function data_dir()
    {
        $data_dir =  Model_Option::get_option('data_dir');
        return $data_dir. '/'. $this->problem_id;
    }
    public function in_data_files()
    {
        $files = array();

        if ( file_exists($this->data_dir()) and $handle = opendir( $this->data_dir() ))
        {
            while (false !== ($entry = readdir($handle)))
            {
                if ( substr($entry, -3) == '.in' )
                {
                    array_push($files, $entry);
                }
            }
            closedir($handle);
        }

        return $files;
    }

    public function out_data_files()
    {
        $files = array();
        if ( file_exists($this->data_dir()) and $handle = opendir( $this->data_dir() ))
        {
            while (false !== ($entry = readdir($handle)))
            {
                if ( substr($entry, -4) == '.out' )
                {
                    array_push($files, $entry);
                }
            }
            closedir($handle);
        }

        return $files;
    }

    protected function initial_data()
    {
        $this->in_date = e::format_time();
    }

    public function validate()
    {}
}
