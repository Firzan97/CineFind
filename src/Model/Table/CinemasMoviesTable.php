<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CinemasMovies Model
 *
 * @property \App\Model\Table\MoviesTable&\Cake\ORM\Association\BelongsTo $Movies
 * @property \App\Model\Table\CinemasTable&\Cake\ORM\Association\BelongsTo $Cinemas
 *
 * @method \App\Model\Entity\CinemasMovie get($primaryKey, $options = [])
 * @method \App\Model\Entity\CinemasMovie newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CinemasMovie[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CinemasMovie|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CinemasMovie saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CinemasMovie patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CinemasMovie[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CinemasMovie findOrCreate($search, callable $callback = null, $options = [])
 */
class CinemasMoviesTable extends Table
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

        $this->setTable('cinemas_movies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Movies', [
            'foreignKey' => 'movie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cinemas', [
            'foreignKey' => 'cinema_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

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
        $rules->add($rules->existsIn(['cinema_id'], 'Cinemas'));

        return $rules;
    }
}
