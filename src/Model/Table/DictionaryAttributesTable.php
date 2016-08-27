<?php
namespace Freeradius\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DictionaryAttributes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $DictionaryVendors
 *
 * @method \Freeradius\Model\Entity\DictionaryAttribute get($primaryKey, $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute newEntity($data = null, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute[] newEntities(array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute[] patchEntities($entities, array $data, array $options = [])
 * @method \Freeradius\Model\Entity\DictionaryAttribute findOrCreate($search, callable $callback = null)
 */
class DictionaryAttributesTable extends Table
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

        $this->table('dictionary_attributes');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('DictionaryVendors', [
            'foreignKey' => 'dictionary_vendor_id',
            'joinType' => 'INNER',
            'className' => 'Freeradius.DictionaryVendors'
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
            ->notEmpty('name')
            ->add('name', [
                'unique' => [
                    'rule' => ['validateUnique'],
                    'provider' => 'table',
                    'message' => __('An attribute with the same name is already registered!')
                ]
            ]);

        $validator
            ->requirePresence('oid', 'create')
            ->notEmpty('oid');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

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
        $rules->add($rules->existsIn(['dictionary_vendor_id'], 'DictionaryVendors'));

        return $rules;
    }
}
