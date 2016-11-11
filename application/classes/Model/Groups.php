<?php  defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author: wenkang
 *
 */
class Model_Groups extends Model_Base {

	static $table = 'groups';
    static $primary_key = 'group_id';

    static $cols = array(
        'group_id',
        'member',
        'time_created',
        'defunct',
    );


    public $group_id;
    public $member;
    public $time_created;
    public $defunct;




    public static function  find_all_groupid()
    {

        $query = DB::select('group_id')->from(static::$table);

        $result = $query->execute();
        return $result;
    }



    public function save()
    {
        // prepare data
//        $this->data['update_at'] = PP::format_time();

        // 过滤不存在的数据
        $data = $this->raw_array();

        // if ( isset($this->{static::$primary_key}) and $this->{static::$primary_key})
        // {
        //     // if primary key exist, then update, contain primary key, haha
        //     $primary_id = $this->{static::$primary_key};
        //     //            unset($this->data[static::$primary_key]);

        //     $query = DB::update(static::$table)->set($data)->where(static::$primary_key, '=', $primary_id);
        //     $ret   = $query->execute();

        //     return $ret;
        // } else
        // {
            // else save new record
            $keys   = array_keys($data);
            $values = array_values($data);

            list($id, $affect_row) = DB::insert(static::$table, $keys)->values($values)->execute();

            $this->{static::$primary_key} = $id;

            return $affect_row;
        // }
    }

    protected function initial_data()
    {
       $this->member = 0;
       $this->defunct = self::DEFUNCT_NO;
       $this->time_created = e::format_time();
    }

       public function validate()
    {}
}
