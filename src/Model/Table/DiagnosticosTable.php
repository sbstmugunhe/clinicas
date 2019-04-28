<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diagnosticos Model
 *
 * @property \App\Model\Table\TratamentosTable|\Cake\ORM\Association\HasMany $Tratamentos
 *
 * @method \App\Model\Entity\Diagnostico get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diagnostico newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Diagnostico[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diagnostico|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diagnostico|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diagnostico patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diagnostico[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diagnostico findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiagnosticosTable extends Table
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

        $this->setTable('diagnosticos');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Tratamentos', [
            'foreignKey' => 'diagnostico_id'
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
            ->allowEmpty('name');

        $validator
            ->scalar('sintoma')
            ->maxLength('sintoma', 255)
            ->allowEmpty('sintoma');

        $validator
            ->scalar('metodo')
            ->maxLength('metodo', 255)
            ->allowEmpty('metodo');

        return $validator;
    }
}
