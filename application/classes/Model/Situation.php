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


                        $user_id_date[$key] = array(date('H:i',strtotime($each_line->in_date)));

                    }
                }
            }


        }

        return array($user_id_date,$user_id_array);
    }



public static function inject($text, $area, $orderby = array(), $show_all=false)
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


/*
author : zhangzexiang
function : if exists this day of users_status
 */
    public static function check_exists($last_day)
    {
        $term = "{$last_day}%";
        $query = DB::select()->from(static::$table)
            ->where('date', 'LIKE', $term);

        $result = $query->as_object(get_called_class())->execute();

        return $result->as_array();
    }

    /**
         * @param       $text
         * @param       $area
         * @param array $orderby
         * @param bool  $show_all
         *
         * @return Model_Problem[]
         */
        public static function search($text, $area, $orderby = array(), $show_all=false, $left, $right)
        {
            $term = "%{$text}%";
            $query = DB::select()->from('users_status')
                ->where($area, 'LIKE', $term)
                ->where($left, '=' , $right);
                

            foreach($orderby as $key => $order)
            {
                $query->order_by($key, $order);
            }

            if ( ! $show_all )
                $query->where('defunct', '=', self::DEFUNCT_NO);

            $ret = $query->as_object(get_called_class())->execute();

            return $ret->as_array();
        }

    protected function initial_data()
    {
        $this->in_date = e::format_time();
    }

    public function validate()
    {}


//add


    public static function user_day_data($date, $user_id){

        // $term = "%{$date}%";
        // $query = DB::select()->from('users_status')
        //     ->where('date', '=', $date)
        //     ->where('user_id', '=' , $user_id);

        // $ret = $query->as_object(get_called_class())->execute();

        $result = DB::select()->from(static::$table)->where('date', '=', $date)->where('user_id', '=' , $user_id)->as_object(get_called_class())->execute();
        return $result->current();

    }

    public static function dd ($array){

    $query = DB::delete(static::$table);

            foreach($array as $col => $val)
            {
                $query->where($col, '=', $val);
            }
            return $query->execute();
    }
}
