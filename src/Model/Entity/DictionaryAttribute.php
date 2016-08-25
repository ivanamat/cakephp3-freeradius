<?php
namespace Freeradius\Model\Entity;

use Cake\ORM\Entity;

/**
 * DictionaryAttribute Entity
 *
 * @property int $id
 * @property int $dictionary_vendor_id
 * @property string $name
 * @property int $oid
 * @property string $type
 *
 * @property \Freeradius\Model\Entity\DictionaryVendor $dictionary_vendor
 */
class DictionaryAttribute extends Entity
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
        '*' => true,
        'id' => false
    ];
}
