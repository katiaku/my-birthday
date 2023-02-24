<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BirthdayGuestsFixture
 */
class BirthdayGuestsFixture extends TestFixture
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
                'surname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'birthday_id' => 1,
                'user_id' => 1,
                'created' => '2023-02-24 17:13:59',
                'modified' => '2023-02-24 17:13:59',
            ],
        ];
        parent::init();
    }
}
