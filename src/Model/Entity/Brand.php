<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Brand Entity
 *
 * @property int $id
 * @property string $brandName
 * @property string $brandLogo
 * @property \Cake\I18n\FrozenTime $createdAt
 * @property \Cake\I18n\FrozenTime $modifiedAt
 *
 * @property \App\Model\Entity\Vehicle[] $vehicles
 */
class Brand extends Entity
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
        'brandName' => true,
        'brandLogo' => true,
        'vehicles' => true
    ];
}
