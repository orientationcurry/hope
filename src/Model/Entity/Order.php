<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $customer_id
 * @property int|null $id_product
 * @property int|null $id_photo
 * @property string|null $image_photo
 * @property string|null $image_product
 *
 * @property \App\Model\Entity\Customer $customer
 */
class Order extends Entity
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
        'customer_id' => true,
        'id_product' => true,
        'id_photo' => true,
        'image_photo' => true,
        'image_product' => true,
        'customer' => true,
    ];
}
