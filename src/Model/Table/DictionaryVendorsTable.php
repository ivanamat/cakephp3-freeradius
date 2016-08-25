<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DictionaryVendors Model
 *
 * @property \Cake\ORM\Association\HasMany $DictionaryAttributes
 *
 * @method \Freeradius\Model\Entity\DictionaryVendor get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryVendor findOrCreate($search, callable $callback = null)
 */
class DictionaryVendorsTable extends Table
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

        $this->table('dictionary_vendors');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('DictionaryAttributes', [
            'foreignKey' => 'dictionary_vendor_id',
            'className' => 'Freeradius.DictionaryAttributes'
        ]);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
