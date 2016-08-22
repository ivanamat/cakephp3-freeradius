<?php
namespace Freeradius\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RadusergroupFixture
 *
 */
class RadusergroupFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'radusergroup';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'groupname' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'priority' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'username' => ['type' => 'index', 'columns' => ['username'], 'length' => ['username' => '32']],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'username' => 'Lorem ipsum dolor sit amet',
            'groupname' => 'Lorem ipsum dolor sit amet',
            'priority' => 1
        ],
    ];
}
