<?php
namespace Freeradius\Model\Entity;

use Cake\ORM\Entity;

/**
 * Na Entity
 *
 * @property int $id
 * @property string $nasname
 * @property string $shortname
 * @property string $type
 * @property int $ports
 * @property string $secret
 * @property string $server
 * @property string $community
 * @property string $description
 */
class Na extends Entity
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
