<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KeihisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KeihisTable Test Case
 */
class KeihisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KeihisTable
     */
    public $Keihis;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.keihis',
        'app.kamokus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Keihis') ? [] : ['className' => 'App\Model\Table\KeihisTable'];
        $this->Keihis = TableRegistry::get('Keihis', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Keihis);

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
