<?php
namespace Freeradius\Model\Entity;

use Cake\ORM\Entity;

/**
 * Radacct Entity
 *
 * @property int $radacctid
 * @property string $acctsessionid
 * @property string $acctuniqueid
 * @property string $username
 * @property string $groupname
 * @property string $realm
 * @property string $nasipaddress
 * @property string $nasportid
 * @property string $nasporttype
 * @property \Cake\I18n\Time $acctstarttime
 * @property \Cake\I18n\Time $acctupdatetime
 * @property \Cake\I18n\Time $acctstoptime
 * @property int $acctinterval
 * @property int $acctsessiontime
 * @property string $acctauthentic
 * @property string $connectinfo_start
 * @property string $connectinfo_stop
 * @property int $acctinputoctets
 * @property int $acctoutputoctets
 * @property string $calledstationid
 * @property string $callingstationid
 * @property string $acctterminatecause
 * @property string $servicetype
 * @property string $framedprotocol
 * @property string $framedipaddress
 */
class Radacct extends Entity
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
        'radacctid' => false
    ];
}
