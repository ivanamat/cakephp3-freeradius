<?php
namespace Freeradius\Model\Entity;

use Cake\ORM\Entity;

/**
 * Radpostauth Entity
 *
 * @property int $id
 * @property string $username
 * @property string $pass
 * @property string $reply
 * @property \Cake\I18n\Time $authdate
 */
class Radpostauth extends Entity
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
