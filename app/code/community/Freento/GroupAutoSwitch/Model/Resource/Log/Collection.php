<?php

class Freento_Groupautoswitch_Model_Resource_Log_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('freento_groupautoswitch/Log');
    }
}
