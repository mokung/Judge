<?php  defined('SYSPATH') OR die('No direct access allowed.');

class Model_Groups extends Model_Base {

	static $table = 'groups';
    static $primary_key = 'group_id';

    static $cols = array(
        'group_id',
        'time_created',
        'defunct',
    );


    public $group_id;
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

        // else save new record
        $keys   = array_keys($data);
        $values = array_values($data);

        $query  = DB::insert(static::$table, $keys)->values($values);

        $query->execute();
    }


    protected function initial_data()
    {
      // $this->group_id = "dw";
       $this->defunct = self::DEFUNCT_NO;
       $this->time_created = e::format_time();
    }

       public function validate()
    {}
}
