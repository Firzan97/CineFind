<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Showtimes Model
 *
 * @property \App\Model\Table\MoviesTable&\Cake\ORM\Association\BelongsTo $Movies
 * @property \App\Model\Table\HallsTable&\Cake\ORM\Association\BelongsTo $Halls
 * @property \App\Model\Table\CinemasTable&\Cake\ORM\Association\BelongsTo $Cinemas
 * @property \App\Model\Table\TicketsTable&\Cake\ORM\Association\HasMany $Tickets
 *
 * @method \App\Model\Entity\Showtime get($primaryKey, $options = [])
 * @method \App\Model\Entity\Showtime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Showtime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Showtime|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Showtime saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Showtime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Showtime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Showtime findOrCreate($search, callable $callback = null, $options = [])
 */
class ShowtimesTable extends Table
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

        $this->setTable('showtimes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Movies', [
            'foreignKey' => 'movie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Halls', [
            'foreignKey' => 'hall_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cinemas', [
            'foreignKey' => 'cinema_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Tickets', [
            'foreignKey' => 'showtime_id'
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmptyDate('date');

        $validator
            ->scalar('screentime')
            ->requirePresence('screentime', 'create')
            ->notEmptyString('screentime');

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
        $rules->add($rules->existsIn(['movie_id'], 'Movies'));
        $rules->add($rules->existsIn(['hall_id'], 'Halls'));
        $rules->add($rules->existsIn(['cinema_id'], 'Cinemas'));

        return $rules;
    }
}
