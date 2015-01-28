<?php

namespace tests\unit\data\dar;

use \spinitron\dynamicAr\DynamicActiveRecord;
use \spinitron\dynamicAr\DynamicActiveQuery;

class Product extends DynamicActiveRecord
{
    public static $db;

    public static function getDb()
    {
        return self::$db;
    }

    public static function tableName()
    {
        return 'product';
    }

    public static function dynamicColumn()
    {
        return 'dynamic_columns';
    }

    /**
     * @return DynamicActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
}
