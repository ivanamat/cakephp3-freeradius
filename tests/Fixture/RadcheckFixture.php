<?php
namespace Freeradius\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RadcheckFixture
 *
 */
class RadcheckFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'radcheck';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'attribute' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'op' => ['type' => 'string', 'fixed' => true, 'length' => 2, 'null' => false, 'default' => '==', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null],
        'value' => ['type' => 'string', 'length' => 253, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'username' => ['type' => 'index', 'columns' => ['username'], 'length' => ['username' => '32']],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'id' => 1,
            'username' => 'Lorem ipsum dolor sit amet',
            'attribute' => 'Lorem ipsum dolor sit amet',
            'op' => '',
            'value' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
