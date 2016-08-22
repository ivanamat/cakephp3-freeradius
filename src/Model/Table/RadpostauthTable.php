<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radpostauth Model
 *
 * @method \Freeradius\Model\Entity\Radpostauth get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radpostauth findOrCreate($search, callable $callback = null)
 */
class RadpostauthTable extends Table
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

        $this->table('radpostauth');
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
            ->requirePresence('pass', 'create')
            ->notEmpty('pass');

        $validator
            ->requirePresence('reply', 'create')
            ->notEmpty('reply');

        $validator
            ->dateTime('authdate')
            ->requirePresence('authdate', 'create')
            ->notEmpty('authdate');

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
