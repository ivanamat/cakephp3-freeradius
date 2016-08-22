<?php
namespace Freeradius\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Freeradius\Model\Table\RadgroupreplyTable;

/**
 * Freeradius\Model\Table\RadgroupreplyTable Test Case
 */
class RadgroupreplyTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Freeradius\Model\Table\RadgroupreplyTable
     */
    public $Radgroupreply;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.freeradius.radgroupreply'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Radgroupreply') ? [] : ['className' => 'Freeradius\Model\Table\RadgroupreplyTable'];
        $this->Radgroupreply = TableRegistry::get('Radgroupreply', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Radgroupreply);

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
