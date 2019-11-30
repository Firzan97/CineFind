<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CinemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CinemasTable Test Case
 */
class CinemasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CinemasTable
     */
    public $Cinemas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cinemas',
        'app.Showtimes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Cinemas') ? [] : ['className' => CinemasTable::class];
        $this->Cinemas = TableRegistry::getTableLocator()->get('Cinemas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cinemas);

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
