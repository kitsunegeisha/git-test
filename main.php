<?php

namespace vs28torbat\models;

use Yii;
use common\models\MariaDB\ManualMariaDB;

class MotorblockDB
{
    public function ChangeWorkorder($line, $data)
    {
        $rpy = "1;OK";
        $cnt2 = "2;OK";
        $rpy = $cnt2;
        return $rpy;
    }
    public function OKayWorkorder($line, $data)
    {
        $rpy = "1;OK";
        $cnt2 = "3;OK";
        $rpy = $cnt2;
        return $rpy;
    }
}
