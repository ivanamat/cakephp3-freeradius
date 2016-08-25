<?php
namespace Freeradius\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Freeradius\Model\Table\DictionaryVendorsTable;

/**
 * Freeradius\Model\Table\DictionaryVendorsTable Test Case
 */
class DictionaryVendorsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Freeradius\Model\Table\DictionaryVendorsTable
     */
    public $DictionaryVendors;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.freeradius.dictionary_vendors',
        'plugin.freeradius.dictionary_attributes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DictionaryVendors') ? [] : ['className' => 'Freeradius\Model\Table\DictionaryVendorsTable'];
        $this->DictionaryVendors = TableRegistry::get('DictionaryVendors', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DictionaryVendors);

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
}
