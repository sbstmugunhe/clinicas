<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Areaspesquisas Model
 *
 * @property \App\Model\Table\PropostasTable|\Cake\ORM\Association\HasMany $Propostas
 *
 * @method \App\Model\Entity\Areaspesquisa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Areaspesquisa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Areaspesquisa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Areaspesquisa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Areaspesquisa|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Areaspesquisa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Areaspesquisa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Areaspesquisa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AreaspesquisasTable extends Table
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

        $this->setTable('areaspesquisas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Propostas', [
            'foreignKey' => 'areaspesquisa_id'
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

        return $validator;
    }
}
