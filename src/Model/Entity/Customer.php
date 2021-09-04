<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity
 *
 * @property int $id
 * @property int $number_phone
 * @property string $Address
 * @property string $Email
 *
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Payment[] $payments
 */
class Customer extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'number_phone' => true,
        'Address' => true,
        'Email' => true,
        'orders' => true,
        'payments' => true,
    ];
}
