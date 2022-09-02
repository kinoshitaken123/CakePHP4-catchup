<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NameTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NameTable Test Case
 */
class NameTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\NameTable
     */
    protected $Name;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Name',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Name') ? [] : ['className' => NameTable::class];
        $this->Name = $this->getTableLocator()->get('Name', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Name);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\NameTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
