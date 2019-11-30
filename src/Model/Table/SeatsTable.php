<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seats Model
 *
 * @property \App\Model\Table\HallsTable&\Cake\ORM\Association\BelongsTo $Halls
 *
 * @method \App\Model\Entity\Seat get($primaryKey, $options = [])
 * @method \App\Model\Entity\Seat newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Seat[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seat|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seat saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seat patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Seat[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seat findOrCreate($search, callable $callback = null, $options = [])
 */
class SeatsTable extends Table
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

        $this->setTable('seats');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Halls', [
            'foreignKey' => 'hall_id',
            'joinType' => 'INNER'
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
            ->scalar('id')
            ->maxLength('id', 5)
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('row')
            ->maxLength('row', 5)
            ->requirePresence('row', 'create')
            ->notEmptyString('row');

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
        $rules->add($rules->existsIn(['hall_id'], 'Halls'));

        return $rules;
    }
}
