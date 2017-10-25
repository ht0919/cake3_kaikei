<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KamokusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KamokusTable Test Case
 */
class KamokusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KamokusTable
     */
    public $Kamokus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('Kamokus') ? [] : ['className' => 'App\Model\Table\KamokusTable'];
        $this->Kamokus = TableRegistry::get('Kamokus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kamokus);

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
