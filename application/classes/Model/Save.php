<?php
/**
 * @author: freefcw
 * Date: 1/3/14
 * Time: 2:08 PM
 */

abstract class Model_Save extends Model_Base
{
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
}