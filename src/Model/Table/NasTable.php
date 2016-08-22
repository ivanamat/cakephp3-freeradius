<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Nas Model
 *
 * @method \Freeradius\Model\Entity\Na get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\Na newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\Na[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Na|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\Na patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Na[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\Na findOrCreate($search, callable $callback = null)
 */
class NasTable extends Table
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

        $this->table('nas');
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
            ->requirePresence('nasname', 'create')
            ->notEmpty('nasname');

        $validator
            ->allowEmpty('shortname');

        $validator
            ->allowEmpty('type');

        $validator
            ->integer('ports')
            ->allowEmpty('ports');

        $validator
            ->requirePresence('secret', 'create')
            ->notEmpty('secret');

        $validator
            ->allowEmpty('server');

        $validator
            ->allowEmpty('community');

        $validator
            ->allowEmpty('description');

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
