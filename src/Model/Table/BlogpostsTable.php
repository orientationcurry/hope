<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blogposts Model
 *
 * @method \App\Model\Entity\Blogpost newEmptyEntity()
 * @method \App\Model\Entity\Blogpost newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Blogpost[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Blogpost get($primaryKey, $options = [])
 * @method \App\Model\Entity\Blogpost findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Blogpost patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Blogpost[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Blogpost|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blogpost saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blogpost[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Blogpost[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Blogpost[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Blogpost[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class BlogpostsTable extends Table
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

        $this->setTable('blogposts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('Id');
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
            ->integer('Id')
            ->allowEmptyString('Id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->dateTime('date')
            ->notEmptyDateTime('date');

        $validator
            ->scalar('contents')
            ->maxLength('contents', 255)
            ->requirePresence('contents', 'create')
            ->notEmptyString('contents');

        return $validator;
    }
}
