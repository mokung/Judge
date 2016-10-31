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













   // not to change

    protected function initial_data()
    {
        $this->new_mail = self::MAIL_NEW;
        $this->in_date = e::format_time();
        $this->reply = 0;
        $this->defunct = self::DEFUNCT_NO;
    }

    public function validate()
    {}
}