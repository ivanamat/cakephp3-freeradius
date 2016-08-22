<?php
namespace Freeradius\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RadacctFixture
 *
 */
class RadacctFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'radacct';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'radacctid' => ['type' => 'biginteger', 'length' => 21, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'acctsessionid' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acctuniqueid' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'username' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'groupname' => ['type' => 'string', 'length' => 64, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'realm' => ['type' => 'string', 'length' => 64, 'null' => true, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nasipaddress' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nasportid' => ['type' => 'string', 'length' => 15, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'nasporttype' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acctstarttime' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'acctupdatetime' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'acctstoptime' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'acctinterval' => ['type' => 'integer', 'length' => 12, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acctsessiontime' => ['type' => 'integer', 'length' => 12, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acctauthentic' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'connectinfo_start' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'connectinfo_stop' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acctinputoctets' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'acctoutputoctets' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'calledstationid' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'callingstationid' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'acctterminatecause' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'servicetype' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'framedprotocol' => ['type' => 'string', 'length' => 32, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'framedipaddress' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => '', 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'username' => ['type' => 'index', 'columns' => ['username'], 'length' => []],
            'framedipaddress' => ['type' => 'index', 'columns' => ['framedipaddress'], 'length' => []],
            'acctsessionid' => ['type' => 'index', 'columns' => ['acctsessionid'], 'length' => []],
            'acctsessiontime' => ['type' => 'index', 'columns' => ['acctsessiontime'], 'length' => []],
            'acctstarttime' => ['type' => 'index', 'columns' => ['acctstarttime'], 'length' => []],
            'acctinterval' => ['type' => 'index', 'columns' => ['acctinterval'], 'length' => []],
            'acctstoptime' => ['type' => 'index', 'columns' => ['acctstoptime'], 'length' => []],
            'nasipaddress' => ['type' => 'index', 'columns' => ['nasipaddress'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['radacctid'], 'length' => []],
            'acctuniqueid' => ['type' => 'unique', 'columns' => ['acctuniqueid'], 'length' => []],
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
            'radacctid' => 1,
            'acctsessionid' => 'Lorem ipsum dolor sit amet',
            'acctuniqueid' => 'Lorem ipsum dolor sit amet',
            'username' => 'Lorem ipsum dolor sit amet',
            'groupname' => 'Lorem ipsum dolor sit amet',
            'realm' => 'Lorem ipsum dolor sit amet',
            'nasipaddress' => 'Lorem ipsum d',
            'nasportid' => 'Lorem ipsum d',
            'nasporttype' => 'Lorem ipsum dolor sit amet',
            'acctstarttime' => '2016-08-22 10:38:35',
            'acctupdatetime' => '2016-08-22 10:38:35',
            'acctstoptime' => '2016-08-22 10:38:35',
            'acctinterval' => 1,
            'acctsessiontime' => 1,
            'acctauthentic' => 'Lorem ipsum dolor sit amet',
            'connectinfo_start' => 'Lorem ipsum dolor sit amet',
            'connectinfo_stop' => 'Lorem ipsum dolor sit amet',
            'acctinputoctets' => 1,
            'acctoutputoctets' => 1,
            'calledstationid' => 'Lorem ipsum dolor sit amet',
            'callingstationid' => 'Lorem ipsum dolor sit amet',
            'acctterminatecause' => 'Lorem ipsum dolor sit amet',
            'servicetype' => 'Lorem ipsum dolor sit amet',
            'framedprotocol' => 'Lorem ipsum dolor sit amet',
            'framedipaddress' => 'Lorem ipsum d'
        ],
    ];
}
