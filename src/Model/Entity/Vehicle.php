<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property int $id
 * @property int $brand_id
 * @property string $modelName
 * @property string $modelImage
 * @property int $yearFabrication
 * @property int $yearModel
 * @property \Cake\I18n\FrozenTime $createdAt
 * @property \Cake\I18n\FrozenTime $modifiedAt
 *
 * @property \App\Model\Entity\Brand $brand
 */
class Vehicle extends Entity
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
        'brand_id' => true,
        'modelName' => true,
        'modelImage' => true,
        'yearFabrication' => true,
        'yearModel' => true,
        'brand' => true
    ];
}
