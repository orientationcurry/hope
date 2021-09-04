<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BlogpostsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BlogpostsTable Test Case
 */
class BlogpostsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BlogpostsTable
     */
    protected $Blogposts;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Blogposts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Blogposts') ? [] : ['className' => BlogpostsTable::class];
        $this->Blogposts = $this->getTableLocator()->get('Blogposts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Blogposts);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BlogpostsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
