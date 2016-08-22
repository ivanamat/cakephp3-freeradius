<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Radgroupcheck Model
 *
 * @method \Freeradius\Model\Entity\Radgroupcheck get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Radgroupcheck findOrCreate($search, callable $callback = null)
 */
class RadgroupcheckTable extends Table
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

        $this->table('radgroupcheck');
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
            ->requirePresence('groupname', 'create')
            ->notEmpty('groupname');

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
     * Returns the database connection name to use by default.
     *
     * @return string
     */
    public static function defaultConnectionName()
    {
        return 'freeradius';
    }
}
