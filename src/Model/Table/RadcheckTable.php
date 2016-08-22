<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radcheck Model
 *
 * @method \Freeradius\Model\Entity\Radcheck get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Radcheck newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Radcheck[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radcheck|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Radcheck patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radcheck[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radcheck findOrCreate($search, callable $callback = null)
 */
class RadcheckTable extends Table
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

        $this->table('radcheck');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('attribute', 'create')
            ->notEmpty('attribute');

        $validator
            ->requirePresence('op', 'create')
            ->notEmpty('op');

        $validator
            ->requirePresence('value', 'create')
            ->notEmpty('value');

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
