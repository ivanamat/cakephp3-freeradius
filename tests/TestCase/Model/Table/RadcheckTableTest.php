<?php
namespace Freeradius\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Freeradius\Model\Table\RadcheckTable;

/**
 * Freeradius\Model\Table\RadcheckTable Test Case
 */
class RadcheckTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Freeradius\Model\Table\RadcheckTable
     */
    public $Radcheck;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.freeradius.radcheck'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Radcheck') ? [] : ['className' => 'Freeradius\Model\Table\RadcheckTable'];
        $this->Radcheck = TableRegistry::get('Radcheck', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Radcheck);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
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
