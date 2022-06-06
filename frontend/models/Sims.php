<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

class sims extends \yii\db\ActiveRecord
{
    private $id;
    private $iccid;
    private $imsi;
    private $msisdn;
    private $device;
    private $mccmnc;
    private $stu;
    private $slot;
    private $active;
    private $lastmessage;
    private $expiry;
    private $bill;
    private $message;
    private $last_sent;
    private $last_received;
    private $last_update;
  
    public function rules(){
        return[
            [['title', 'description', 'category'], 'required']
        ];
    }
}
?>