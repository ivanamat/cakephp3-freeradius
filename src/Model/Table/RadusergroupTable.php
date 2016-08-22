<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radusergroup Model
 *
 * @method \Freeradius\Model\Entity\Radusergroup get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radusergroup findOrCreate($search, callable $callback = null)
 */
class RadusergroupTable extends Table
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

        $this->table('radusergroup');
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
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->requirePresence('groupname', 'create')
            ->notEmpty('groupname');

        $validator
            ->integer('priority')
            ->requirePresence('priority', 'create')
            ->notEmpty('priority');

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
