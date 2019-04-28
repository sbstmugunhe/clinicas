<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campanhas Model
 *
 * @property \App\Model\Table\UnidadesTable|\Cake\ORM\Association\BelongsTo $Unidades
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Campanha get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campanha newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Campanha[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campanha|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campanha patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campanha findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampanhasTable extends Table
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

        $this->setTable('campanhas');
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
            ->scalar('tipo_vacinacao')
            ->maxLength('tipo_vacinacao', 255)
            ->allowEmpty('tipo_vacinacao');

        $validator
            ->integer('dose')
            ->allowEmpty('dose');

        $validator
            ->integer('unidade_sanitaria')
            ->allowEmpty('unidade_sanitaria');

        $validator
            ->integer('brigada_movel')
            ->allowEmpty('brigada_movel');

        $validator
            ->integer('agente_comunitario_saude')
            ->allowEmpty('agente_comunitario_saude');

        $validator
            ->integer('intervalo_idade')
            ->allowEmpty('intervalo_idade');

        $validator
            ->integer('mulhere_p_parto')
            ->allowEmpty('mulhere_p_parto');

        $validator
            ->scalar('comentarios')
            ->maxLength('comentarios', 255)
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
        $rules->add($rules->existsIn(['unidade_id'], 'Unidades'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
