<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estudantes Model
 *
 * @property \App\Model\Table\OccupationsTable|\Cake\ORM\Association\BelongsTo $Occupations
 *
 * @method \App\Model\Entity\Estudante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estudante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estudante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estudante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudante|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estudante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estudante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estudante findOrCreate($search, callable $callback = null, $options = [])
 */
class EstudantesTable extends Table
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

        $this->setTable('estudantes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Occupations', [
            'foreignKey' => 'occupation_id'
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
            ->scalar('apelido')
            ->maxLength('apelido', 255)
            ->requirePresence('apelido', 'create')
            ->notEmpty('apelido');

        $validator
            ->date('data_nascimento')
            ->requirePresence('data_nascimento', 'create')
            ->notEmpty('data_nascimento');

        $validator
            ->scalar('genero')
            ->maxLength('genero', 255)
            ->allowEmpty('genero');

        $validator
            ->scalar('nome_pai')
            ->maxLength('nome_pai', 255)
            ->allowEmpty('nome_pai');

        $validator
            ->scalar('nome_mae')
            ->maxLength('nome_mae', 255)
            ->allowEmpty('nome_mae');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 255)
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('tipo_documento')
            ->maxLength('tipo_documento', 255)
            ->requirePresence('tipo_documento', 'create')
            ->notEmpty('tipo_documento');

        $validator
            ->scalar('numero_doc')
            ->maxLength('numero_doc', 255)
            ->requirePresence('numero_doc', 'create')
            ->notEmpty('numero_doc');

        $validator
            ->scalar('local_trabalho')
            ->maxLength('local_trabalho', 255)
            ->allowEmpty('local_trabalho');

        $validator
            ->scalar('foto')
            ->maxLength('foto', 255)
            ->allowEmpty('foto');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['occupation_id'], 'Occupations'));

        return $rules;
    }
}
