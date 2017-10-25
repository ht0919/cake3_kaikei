<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kamokus Model
 *
 * @method \App\Model\Entity\Kamokus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kamokus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kamokus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kamokus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kamokus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kamokus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kamokus findOrCreate($search, callable $callback = null)
 */
class KamokusTable extends Table
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

        $this->table('kamokus');
        //$this->displayField('id');
        $this->displayField('kamokumei');
        $this->primaryKey('id');
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
            ->requirePresence('kamokumei', 'create')
            ->notEmpty('kamokumei');

        return $validator;
    }
}
