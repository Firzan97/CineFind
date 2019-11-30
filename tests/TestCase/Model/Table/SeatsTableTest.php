<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SeatsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SeatsTable Test Case
 */
class SeatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SeatsTable
     */
    public $Seats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Seats',
        'app.Halls'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Seats') ? [] : ['className' => SeatsTable::class];
        $this->Seats = TableRegistry::getTableLocator()->get('Seats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Seats);

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
