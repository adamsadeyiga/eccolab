<?php

namespace app\core;

use app\core\db\DBModel;

abstract class UserModel extends DBModel
{
    abstract public function getDisplayName(): string;

    public function tableName(): string
    {
        // TODO: Implement tableName() method.
    }

    public function attributes(): array
    {
        // TODO: Implement attributes() method.
    }

    public function primaryKey(): string
    {
        // TODO: Implement primaryKey() method.
    }

    public function rules(): array
    {
        // TODO: Implement rules() method.
    }
}