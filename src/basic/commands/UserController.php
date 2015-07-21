<?php
namespace johnitvn\userplus\basic\commands;

use yii\console\Controller;

/**
 * User manager commands
 * @author John Martin <john.itvn@gmail.com>
 * @since 1.0.0
 */
class UserController extends Controller{
    
    /**
     * @inheritdoc
     */
    public function actions() {
        return [
            'create-admin'=>'johnitvn\userplus\basic\actions\CommandCreateAction',
        ];
    }
}