<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BirthdayItemsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BirthdayItemsTable Test Case
 */
class BirthdayItemsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BirthdayItemsTable
     */
    protected $BirthdayItems;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BirthdayItems',
        'app.Birthdays',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('BirthdayItems') ? [] : ['className' => BirthdayItemsTable::class];
        $this->BirthdayItems = $this->getTableLocator()->get('BirthdayItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BirthdayItems);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BirthdayItemsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BirthdayItemsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
