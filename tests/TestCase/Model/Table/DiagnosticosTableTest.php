<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiagnosticosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiagnosticosTable Test Case
 */
class DiagnosticosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiagnosticosTable
     */
    public $Diagnosticos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diagnosticos',
        'app.tratamentos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Diagnosticos') ? [] : ['className' => DiagnosticosTable::class];
        $this->Diagnosticos = TableRegistry::getTableLocator()->get('Diagnosticos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diagnosticos);

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
