<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Halls Model
 *
 * @property \App\Model\Table\SeatsTable&\Cake\ORM\Association\HasMany $Seats
 * @property \App\Model\Table\ShowtimesTable&\Cake\ORM\Association\HasMany $Showtimes
 *
 * @method \App\Model\Entity\Hall get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hall newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hall[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hall|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hall saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hall patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hall[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hall findOrCreate($search, callable $callback = null, $options = [])
 */
class HallsTable extends Table
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

        $this->setTable('halls');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Seats', [
            'foreignKey' => 'hall_id'
        ]);
        $this->hasMany('Showtimes', [
            'foreignKey' => 'hall_id'
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('totalseat')
            ->requirePresence('totalseat', 'create')
            ->notEmptyString('totalseat');

        return $validator;
    }
}
