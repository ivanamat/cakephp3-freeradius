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
        
        $data['username'] = strtolower($data['username']);
        $data['groups'] = (isset($data['groups']) && !empty($data['groups'])) ? $data['groups'] : [];

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
        
        $radreplyEntities = $this->Radreply->newEntities(
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

        $arr = [];
        if(count($data['groups']) > 0) {
            foreach($data['groups'] as $group) {
                $data['priority'][$group] = (isset($data['priority'][$group])) ? $data['priority'][$group] : 10;
                $arr[] = [
                    'groupname' => $group,
                    'username' => $data['username'],
                    'priority' => $data['priority'][$group]
                ];
            }
        }
        
        $radusergroupEntities = $this->Radusergroup->newEntities($arr);
        
        $entities['RadusergroupEntities'] = $radusergroupEntities;
        
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
        
        $groups = [];
        foreach ($radusergroup as $item) {
            $groups[] = $item->groupname;
        }
        
        $data['username'] = strtolower(trim($username));
        $data['groups'] = $groups;
        
        return $data;
    }
    
    public function groupAttributesEntities($data) {
        
        $data['groupname'] = strtolower($data['groupname']);
        
        $radcheckEntities = $this->Radgroupcheck->newEntities(
            [
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Framed-Protocol',
                    'op' => '==',
                    'value' => 'PPP'
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Location-ID',
                    'op' => ':=',
                    'value' => $data['WISPr-Location-ID']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Location-Name',
                    'op' => ':=',
                    'value' => $data['WISPr-Location-Name']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Daily-Session',
                    'op' => ':=',
                    'value' => $data['Max-Daily-Session']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Weekly-Session',
                    'op' => ':=',
                    'value' => $data['Max-Weekly-Session']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Monthly-Session',
                    'op' => ':=',
                    'value' => $data['Max-Monthly-Session']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-All-Session',
                    'op' => ':=',
                    'value' => $data['Max-All-Session']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Daily-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Daily-Octets']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Weekly-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Weekly-Octets']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-Monthly-Octets',
                    'op' => ':=',
                    'value' => $data['Max-Monthly-Octets']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Max-All-Octets',
                    'op' => ':=',
                    'value' => $data['Max-All-Octets']
                ]
            ]
        );
        $entities['RadgroupcheckEntities'] = $radcheckEntities;
        
        $radreplyEntities = $this->Radgroupreply->newEntities(
            [
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Reply-Message',
                    'op' => ':=',
                    'value' => $data['Reply-Message']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Session-Timeout',
                    'op' => ':=',
                    'value' => $data['Session-Timeout']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'Port-Limit',
                    'op' => ':=',
                    'value' => $data['Port-Limit']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Redirection-URL',
                    'op' => ':=',
                    'value' => $data['WISPr-Redirection-URL']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Bandwidth-Max-Up',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Max-Up']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Bandwidth-Max-Down',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Max-Down']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Bandwidth-Min-Up',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Min-Up']
                ],
                [
                    'groupname' => $data['groupname'],
                    'attribute' => 'WISPr-Bandwidth-Min-Down',
                    'op' => ':=',
                    'value' => $data['WISPr-Bandwidth-Min-Down']
                ]
            ]
        );
        $entities['RadgroupreplyEntities'] = $radreplyEntities;
        
        return $entities;
    }

    public function groupAttributesData($radgroupcheck,$radgroupreply,$radusergroup) {
        $data = [];
        $groupname = null;
        
        foreach($radgroupcheck as $item) {
            $data[$item->attribute] = $item->value;
            if($groupname == null && isset($item->groupname)) {
                $groupname = $item->groupname;
            }
        }

        foreach($radgroupreply as $item) {
            $data[$item->attribute] = $item->value;
            if($groupname == null && isset($item->groupname)) {
                $groupname = $item->groupname;
            }
        }
        
        $data['users'] = [];
        foreach ($radusergroup as $item) {
            $data['users'][] = $item->username;
        }
        
        $data['groupname'] = strtolower(trim($groupname));
        
        return $data;
    }
}
