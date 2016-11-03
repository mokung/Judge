<?php defined('SYSPATH') OR die('No direct access allowed.');


/**
 * @author: freefcw
 * Date: 12/28/13
 * Time: 2:17 PM
 */

class Model_InvitationCode extends Model_Base
{
    static $cols = array(
        'id',
        'group_id',
        'invited_code',
        'type',
        'num',
        'createtime',

    );

    static $primary_key = 'id'; // NNNNNNNNNNO

    static $table = 'invitation';

    public $id;
    public $group_id;
    public $invited_code;
    public $type;
    public $num;
    public $createtime;






public static function getTimeToMicroseconds()
{
    $t = microtime(true);
    $micro = sprintf("%06d", ($t - floor($t)) * 1000000);
    $d = new DateTime(date('Y-m-d H:i:s.' . $micro, $t));

    return $d->format("Y-m-d H:i:s.u");
}



// public static function get_Group_id($invitation)
// {
//      $result = DB::select(static::$group_id)->from(static::$table)->where(static::$invited_code, '=', $invitation)->execute();
//      return $result;
// }

    public static function get_Group_id($invitation)
    {
       
        $filter = array(
            'invited_code' => $invitation,
        );

        $result = self::find($filter);

        if ($result) return $result[0];

        return null;
    }
    public static function invitation_del($invited_code){

         $query = DB::delete(self::$table)
            ->where('invited_code', '=', $invited_code);
        return $query->execute();

    }
 
      public function save()
    {
        // prepare data
//        $this->data['update_at'] = PP::format_time();

        // 过滤不存在的数据
        $data = $this->raw_array();

        if ( isset($this->{static::$primary_key}) and $this->{static::$primary_key})
        {
            // if primary key exist, then update, contain primary key, haha
            $primary_id = $this->{static::$primary_key};
            //            unset($this->data[static::$primary_key]);

            $query = DB::update(static::$table)->set($data)->where(static::$primary_key, '=', $primary_id);
            $ret   = $query->execute();

            return $ret;
        } else
        {
            // else save new record
            $keys   = array_keys($data);
            $values = array_values($data);

            list($id, $affect_row) = DB::insert(static::$table, $keys)->values($values)->execute();

            $this->{static::$primary_key} = $id;

            return $affect_row;
        }
    }
   
    protected function initial_data()
    {
        // $this->new_mail = self::MAIL_NEW;
        // $this->in_date = e::format_time();
        // $this->reply = 0;
        // $this->defunct = self::DEFUNCT_NO;
    }

    public function validate()
    {}
}