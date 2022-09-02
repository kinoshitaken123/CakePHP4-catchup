<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NameFixture
 */
class NameFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'name';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'name' => 1,
            ],
        ];
        parent::init();
    }
}
