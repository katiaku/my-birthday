<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BirthdayGuestsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BirthdayGuestsTable Test Case
 */
class BirthdayGuestsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BirthdayGuestsTable
     */
    protected $BirthdayGuests;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.BirthdayGuests',
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
        $config = $this->getTableLocator()->exists('BirthdayGuests') ? [] : ['className' => BirthdayGuestsTable::class];
        $this->BirthdayGuests = $this->getTableLocator()->get('BirthdayGuests', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->BirthdayGuests);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BirthdayGuestsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\BirthdayGuestsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
