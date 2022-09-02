<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Name Model
 *
 * @method \App\Model\Entity\Name newEmptyEntity()
 * @method \App\Model\Entity\Name newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Name[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Name get($primaryKey, $options = [])
 * @method \App\Model\Entity\Name findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Name patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Name[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Name|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Name saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Name[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Name[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Name[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Name[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NameTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('name');
        $this->setDisplayField('name');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('name')
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}
