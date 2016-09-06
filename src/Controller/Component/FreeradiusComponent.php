<?php

/**
 * CakePHP 3.x - Freeradius
 * 
 * PHP version 5
 * 
 * Class FreeradiusComponent
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @category CakePHP3
 * 
 * @package  Freeradius\Controller\Component
 * 
 * @author Ivan Amat <dev@ivanamat.es>
 * @copyright Copyright 2016, Iván Amat
 * @license MIT http://opensource.org/licenses/MIT
 * @link https://github.com/ivanamat/cakephp3-freeradius
 */

namespace Freeradius\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

class FreeradiusComponent extends Component {
    
    private $Radcheck = null;
    private $Radreply = null;
    private $Radgroupcheck = null;
    private $Radgroupreply = null;
    private $Radusergroup = null;
    
    public $passwordTypes = [
        'Cleartext-Password' => 'Cleartext-Password',
        'Crypt-Password' => 'Crypt-Password',
        'MD5-Password' => 'MD5-Password',
        'SMD5-Password' => 'SMD5-Password',
        'SHA-Password' => 'SHA-Password',
        'SSHA-Password' => 'SSHA-Password'
    ];

    /**
     * Initialize the Component
     */
    public function initialize(array $config) {
        parent::initialize($config);

        $this->Radcheck = TableRegistry::get('Freeradius.Radcheck');
        $this->Radreply = TableRegistry::get('Freeradius.Radreply');
        $this->Radgroupcheck = TableRegistry::get('Freeradius.Radgroupcheck');
        $this->Radgroupreply = TableRegistry::get('Freeradius.Radgroupreply');
        $this->Radusergroup = TableRegistry::get('Freeradius.Radusergroup');
    }
    
    public function userAttributesEntities($data) {

        $radcheckEntities = $this->Radcheck->newEntities(
            [
                [
                    'username' => $data['username'],
                    'attribute' => $data['Password-Type'],
                    'op' => ':=',
                    'value' => $data['password']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Location-ID',
                    'op' => ':=',
                    'value' => $data['WISPr-Location-ID']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Location-Name',
                    'op' => ':=',
                    'value' => $data['WISPr-Location-Name']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Daily-Session',
                    'op' => ':=',
                    'value' => $data['Max-Daily-Session']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Weekly-Session',
                    'op' => ':=',
                    'value' => $data['Max-Weekly-Session']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Monthly-Session',
                    'op' => ':=',
                    'value' => $data['Max-Monthly-Session']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-All-Session',
                    'op' => ':=',
                    'value' => $data['Max-All-Session']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Daily-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Daily-Octets']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Weekly-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Weekly-Octets']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-Monthly-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Monthly-Octets']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Max-All-Octets',
                    'op' => ':=',
                    'value' => $data['Max-All-Octets']
                ]
            ]
        );
        $entities['RadcheckEntities'] = $radcheckEntities;
        
        $radreplyEntities = $this->Radcheck->newEntities(
            [
                [
                    'username' => $data['username'],
                    'attribute' => 'Reply-Message',
                    'op' => ':=',
                    'value' => $data['Reply-Message']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Session-Timeout',
                    'op' => ':=',
                    'value' => $data['Session-Timeout']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'Port-Limit',
                    'op' => ':=',
                    'value' => $data['Port-Limit']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Redirection-URL',
                    'op' => ':=',
                    'value' => $data['WISPr-Redirection-URL']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Bandwidth-Max-Up',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Max-Up']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Bandwidth-Max-Down',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Max-Down']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Bandwidth-Min-Up',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Min-Up']
                ],
                [
                    'username' => $data['username'],
                    'attribute' => 'WISPr-Bandwidth-Min-Down',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Min-Down']
                ]
            ]
        );
        $entities['RadreplyEntities'] = $radreplyEntities;
        
        return $entities;
    }

    public function userAttributesData($radcheck,$radreply,$radusergroup) {
        $data = [];
        $username = null;
        
        foreach($radcheck as $item) {
            if(in_array($item->attribute, $this->passwordTypes)) {
                $data['Password-Type'] = $item->attribute;
                $username = $item->username;
            } else {
                $data[$item->attribute] = $item->value;
            }
        }

        foreach($radreply as $item) {
            $data[$item->attribute] = $item->value;
        }
        
        $groups = '';
        foreach ($radusergroup as $item) {
            $groups .= $item->groupname.' ';
        }
        
        $data['username'] = trim($username);
        $data['groupname'] = trim($groups);
        
        return $data;
    }
}
