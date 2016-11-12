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



    const MAIL_NEW  = 1;
    const MAIL_READ = 0;
/*
anthod: zhang ze xiang
function : generate invitation code
date: 2016.10.31 13:02
 */
public static function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

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
       $this->new_mail = self::MAIL_NEW;
       $this->in_date = e::format_time();
       $this->reply = 0;
       $this->defunct = self::DEFUNCT_NO;
    }

    public function validate()
    {}

    /**
     * @ param string $server
     * @ param int $port
     * @ param int $limit
     * @ return array
     */
    public static function  getMemcacheKeys ($memcache, $limit = 10000)
    {
        $keysFound = array();

        // $options = $this->_options;
        // $server = $options['servers'][0];
        // $memcache = new Memcache;
        // $memcache->connect($server, $port = 11211, 5);

        $slabs = $memcache->getExtendedStats('slabs');
        foreach ($slabs as $serverSlabs) {
            foreach ($serverSlabs as $slabId => $slabMeta) {
                try {
                    $cacheDump = $memcache->getExtendedStats('cachedump', (int) $slabId, 1000);
                } catch (Exception $e) {
                    continue;
                }

                if (!is_array($cacheDump)) {
                    continue;
                }

                foreach ($cacheDump as $dump) {

                    if (!is_array($dump)) {
                        continue;
                    }

                    foreach ($dump as $key => $value) {
                        $keysFound[] = $key;

                        if (count($keysFound) == $limit) {
                            return $keysFound;
                        }
                    }
                }
            }
        }

        return $keysFound;
    }


}
