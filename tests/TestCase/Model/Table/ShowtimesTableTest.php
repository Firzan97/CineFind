<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShowtimesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShowtimesTable Test Case
 */
class ShowtimesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ShowtimesTable
     */
    public $Showtimes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Showtimes',
        'app.Movies',
        'app.Halls',
        'app.Cinemas',
        'app.Tickets'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Showtimes') ? [] : ['className' => ShowtimesTable::class];
        $this->Showtimes = TableRegistry::getTableLocator()->get('Showtimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Showtimes);

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
