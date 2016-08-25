<?php
namespace Freeradius\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Freeradius\Model\Table\DictionaryAttributesTable;

/**
 * Freeradius\Model\Table\DictionaryAttributesTable Test Case
 */
class DictionaryAttributesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Freeradius\Model\Table\DictionaryAttributesTable
     */
    public $DictionaryAttributes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.freeradius.dictionary_attributes',
        'plugin.freeradius.dictionary_vendors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DictionaryAttributes') ? [] : ['className' => 'Freeradius\Model\Table\DictionaryAttributesTable'];
        $this->DictionaryAttributes = TableRegistry::get('DictionaryAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DictionaryAttributes);

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
}
