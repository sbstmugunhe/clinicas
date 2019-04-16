<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaspesquisasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaspesquisasTable Test Case
 */
class AreaspesquisasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaspesquisasTable
     */
    public $Areaspesquisas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.areaspesquisas',
        'app.propostas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Areaspesquisas') ? [] : ['className' => AreaspesquisasTable::class];
        $this->Areaspesquisas = TableRegistry::getTableLocator()->get('Areaspesquisas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Areaspesquisas);

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
