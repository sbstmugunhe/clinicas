<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Trabalhos Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PropostasTable|\Cake\ORM\Association\BelongsTo $Propostas
 * @property \App\Model\Table\ActividadesTable|\Cake\ORM\Association\HasMany $Actividades
 *
 * @method \App\Model\Entity\Trabalho get($primaryKey, $options = [])
 * @method \App\Model\Entity\Trabalho newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Trabalho[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabalho|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Trabalho patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Trabalho findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TrabalhosTable extends Table
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

        $this->setTable('trabalhos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Propostas', [
            'foreignKey' => 'proposta_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Actividades', [
            'foreignKey' => 'trabalho_id'
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
            ->scalar('estudocaso')
            ->maxLength('estudocaso', 255)
            ->requirePresence('estudocaso', 'create')
            ->notEmpty('estudocaso');

        $validator
            ->scalar('geral')
            ->maxLength('geral', 255)
            ->allowEmpty('geral');

        $validator
            ->scalar('especificos')
            ->allowEmpty('especificos');

        $validator
            ->date('dataentrega')
            ->allowEmpty('dataentrega');

        $validator
            ->scalar('estrutura')
            ->allowEmpty('estrutura');

        $validator
            ->scalar('obras')
            ->allowEmpty('obras');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['proposta_id'], 'Propostas'));

        return $rules;
    }
}
