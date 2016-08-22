<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radacct Model
 *
 * @method \Freeradius\Model\Entity\Radacct get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Radacct newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Radacct[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radacct|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Radacct patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radacct[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radacct findOrCreate($search, callable $callback = null)
 */
class RadacctTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('radacct');
        $this->displayField('radacctid');
        $this->primaryKey('radacctid');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('radacctid', 'create');

        $validator
            ->requirePresence('acctsessionid', 'create')
            ->notEmpty('acctsessionid');

        $validator
            ->requirePresence('acctuniqueid', 'create')
            ->notEmpty('acctuniqueid')
            ->add('acctuniqueid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('groupname', 'create')
            ->notEmpty('groupname');

        $validator
            ->allowEmpty('realm');

        $validator
            ->requirePresence('nasipaddress', 'create')
            ->notEmpty('nasipaddress');

        $validator
            ->allowEmpty('nasportid');

        $validator
            ->allowEmpty('nasporttype');

        $validator
            ->dateTime('acctstarttime')
            ->allowEmpty('acctstarttime');

        $validator
            ->dateTime('acctupdatetime')
            ->allowEmpty('acctupdatetime');

        $validator
            ->dateTime('acctstoptime')
            ->allowEmpty('acctstoptime');

        $validator
            ->integer('acctinterval')
            ->allowEmpty('acctinterval');

        $validator
            ->integer('acctsessiontime')
            ->allowEmpty('acctsessiontime');

        $validator
            ->allowEmpty('acctauthentic');

        $validator
            ->allowEmpty('connectinfo_start');

        $validator
            ->allowEmpty('connectinfo_stop');

        $validator
            ->allowEmpty('acctinputoctets');

        $validator
            ->allowEmpty('acctoutputoctets');

        $validator
            ->requirePresence('calledstationid', 'create')
            ->notEmpty('calledstationid');

        $validator
            ->requirePresence('callingstationid', 'create')
            ->notEmpty('callingstationid');

        $validator
            ->requirePresence('acctterminatecause', 'create')
            ->notEmpty('acctterminatecause');

        $validator
            ->allowEmpty('servicetype');

        $validator
            ->allowEmpty('framedprotocol');

        $validator
            ->requirePresence('framedipaddress', 'create')
            ->notEmpty('framedipaddress');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['acctuniqueid']));

        return $rules;
    }

    /**
     * Returns the database connection name to use by default.
     *
     * @return string
     */
    public static function defaultConnectionName()
    {
        return 'freeradius';
    }
}
