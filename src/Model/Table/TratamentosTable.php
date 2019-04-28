<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tratamentos Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\PacientesTable|\Cake\ORM\Association\BelongsTo $Pacientes
 * @property \App\Model\Table\DiagnosticosTable|\Cake\ORM\Association\BelongsTo $Diagnosticos
 *
 * @method \App\Model\Entity\Tratamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tratamento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tratamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tratamento|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tratamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tratamento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TratamentosTable extends Table
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

        $this->setTable('tratamentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Unidades', [
            'foreignKey' => 'unidade_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Diagnosticos', [
            'foreignKey' => 'diagnostico_id',
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
            ->integer('contadormensal')
            ->allowEmpty('contadormensal');

        $validator
            ->scalar('tratam')
            ->maxLength('tratam', 255)
            ->allowEmpty('tratam');

        $validator
            ->scalar('obs')
            ->maxLength('obs', 255)
            ->allowEmpty('obs');

        $validator
            ->scalar('situacaovacinacao')
            ->maxLength('situacaovacinacao', 255)
            ->allowEmpty('situacaovacinacao');

        $validator
            ->scalar('situacaopaciente')
            ->maxLength('situacaopaciente', 255)
            ->allowEmpty('situacaopaciente');

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
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        $rules->add($rules->existsIn(['diagnostico_id'], 'Diagnosticos'));

        return $rules;
    }
}
