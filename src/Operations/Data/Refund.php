<?php

/**
 * Created by PhpStorm.
 * User: Muhannad Shelleh <muhannad.shelleh@live.com>
 * Date: 6/13/17
 * Time: 11:10 AM
 */

namespace ItvisionSy\PayFort\Operations\Data;

use ItvisionSy\PayFort\OperationData;

/**
 * Class Refund
 * @package ItvisionSy\PayFort\Operations\Data
 * @property string $merchant_reference
 * @property string $amount
 * @property string $currency
 * @property string $fort_id
 * @property string $order_description
 * @method string|Refund merchant_reference(string $set=null)
 * @method string|Refund amount(string $set=null)
 * @method string|Refund currency(string $set=null)
 * @method string|Refund fort_id(string $set=null)
 * @method string|Refund order_description(string $set=null)
 */
class Refund extends OperationData {

    public static function mandatoryFields() {
        return [
            "merchant_reference",
            "amount",
            "currency"
        ];
    }

    public static function optionalFields() {
        return [
            "fort_id",
            "order_description"
        ];
    }

}
