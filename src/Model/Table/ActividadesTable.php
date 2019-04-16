<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Actividades Model
 *
 * @property \App\Model\Table\TrabalhosTable|\Cake\ORM\Association\BelongsTo $Trabalhos
 *
 * @method \App\Model\Entity\Actividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Actividade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Actividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Actividade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actividade|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Actividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Actividade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Actividade findOrCreate($search, callable $callback = null, $options = [])
 */
class ActividadesTable extends Table
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

        $this->setTable('actividades');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Trabalhos', [
            'foreignKey' => 'trabalho_id',
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
        ->allowEmpty('id', 'create');

        $validator
        ->scalar('name')
        ->maxLength('name', 255)
        ->requirePresence('name', 'create')
        ->notEmpty('name');

        $validator
        ->date('inicio')
        ->requirePresence('inicio', 'create')
        ->notEmpty('inicio');

        $validator
        ->date('fim')
        ->requirePresence('fim', 'create')
        ->notEmpty('fim');

        $validator
        ->integer('duracao')
        ->allowEmpty('duracao');

        $validator
        ->scalar('comentarios')
        ->allowEmpty('comentarios');

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
        $rules->add($rules->existsIn(['trabalho_id'], 'Trabalhos'));

        return $rules;
    }
}
