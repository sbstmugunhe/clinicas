<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Propostas Model
 *
 * @property \App\Model\Table\AreaspesquisasTable|\Cake\ORM\Association\BelongsTo $Areaspesquisas
 * @property \App\Model\Table\TrabalhosTable|\Cake\ORM\Association\HasMany $Trabalhos
 *
 * @method \App\Model\Entity\Proposta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proposta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proposta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proposta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proposta|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proposta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proposta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proposta findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PropostasTable extends Table
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

        $this->setTable('propostas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Areaspesquisas', [
            'foreignKey' => 'areaspesquisa_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Trabalhos', [
            'foreignKey' => 'proposta_id'
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
        ->scalar('descricao')
        ->allowEmpty('descricao');

        $validator
        ->scalar('estado')
        ->allowEmpty('estado');

        $validator
        ->scalar('parecer')
        ->allowEmpty('parecer');

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
        $rules->add($rules->existsIn(['areaspesquisa_id'], 'Areaspesquisas'));

        return $rules;
    }

    public function isOwnedBy($propostaId, $userId)
    {
        return $this->exists(['id' => $propostaId, 'user_id' => $userId]);
    }
}
