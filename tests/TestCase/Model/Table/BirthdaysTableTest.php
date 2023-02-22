<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BirthdaysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BirthdaysTable Test Case
 */
class BirthdaysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BirthdaysTable
     */
    protected $Birthdays;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Birthdays',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Birthdays') ? [] : ['className' => BirthdaysTable::class];
        $this->Birthdays = $this->getTableLocator()->get('Birthdays', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Birthdays);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BirthdaysTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BirthdaysTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
