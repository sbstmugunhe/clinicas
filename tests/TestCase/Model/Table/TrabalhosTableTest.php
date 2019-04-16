<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrabalhosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrabalhosTable Test Case
 */
class TrabalhosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrabalhosTable
     */
    public $Trabalhos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.trabalhos',
        'app.users',
        'app.propostas',
        'app.actividades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Trabalhos') ? [] : ['className' => TrabalhosTable::class];
        $this->Trabalhos = TableRegistry::getTableLocator()->get('Trabalhos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trabalhos);

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
