<?php

namespace industi\yii2\user\migrations;

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use industi\yii2\appengine\components\Migration;

/**
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class m140830_171933_fix_ip_field extends Migration
{
    private $userTN = 'usrUser';

    public function up()
    {
        $this->alterColumn($this->userTN, 'registration_ip', $this->bigInteger());
    }

    public function down()
    {
        $this->alterColumn($this->userTN, 'registration_ip', $this->integer());
    }
}
