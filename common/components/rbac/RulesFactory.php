<?php namespace common\components\rbac;

use common\components\rbac\rules\UserGroupRule;
use yii\rbac\Rule;

class RulesFactory
{
    const BASE_RULES = 'UserGroupRule';

    /**
     * @param string $type
     *
     * @return Rule|bool
     */
    public function createRuleObject($type)
    {
        switch ($type) {
            case self::BASE_RULES:
                return new UserGroupRule();
            default:
                return false;
        }
    }
}
