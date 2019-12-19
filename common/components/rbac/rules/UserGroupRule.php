<?php namespace common\components\rbac\rules;

use common\models\User;
use yii\rbac\Rule;

class UserGroupRule extends Rule
{
    /**
     * @var string
     */
    public $name = 'userGroup';

    /**
     * @param int|string $user
     * @param \yii\rbac\Item $item
     * @param array $params
     *
     * @return bool
     */
    public function execute($user, $item, $params)
    {
        if (!\Yii::$app->user->isGuest) {
            $group = \Yii::$app->user->identity->rbac_role;
            if (in_array($item->name, User::ALL_ROLES)) {
                return $group === $item->name;
            }
        }

        return false;
    }
}
