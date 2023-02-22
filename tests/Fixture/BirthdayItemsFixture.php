<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BirthdayItemsFixture
 */
class BirthdayItemsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'units' => 1,
                'birthday_id' => 1,
                'created' => '2023-02-22 11:34:17',
                'modified' => '2023-02-22 11:34:17',
            ],
        ];
        parent::init();
    }
}
