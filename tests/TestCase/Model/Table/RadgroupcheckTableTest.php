<?php
namespace Freeradius\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Freeradius\Model\Table\RadgroupcheckTable;

/**
 * Freeradius\Model\Table\RadgroupcheckTable Test Case
 */
class RadgroupcheckTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Freeradius\Model\Table\RadgroupcheckTable
     */
    public $Radgroupcheck;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.freeradius.radgroupcheck'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Radgroupcheck') ? [] : ['className' => 'Freeradius\Model\Table\RadgroupcheckTable'];
        $this->Radgroupcheck = TableRegistry::get('Radgroupcheck', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Radgroupcheck);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test defaultConnectionName method
     *
     * @return void
     */
    public function testDefaultConnectionName()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
