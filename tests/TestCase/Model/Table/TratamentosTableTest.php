<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TratamentosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TratamentosTable Test Case
 */
class TratamentosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TratamentosTable
     */
    public $Tratamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tratamentos',
        'app.unidades',
        'app.users',
        'app.pacientes',
        'app.diagnosticos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Tratamentos') ? [] : ['className' => TratamentosTable::class];
        $this->Tratamentos = TableRegistry::getTableLocator()->get('Tratamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Tratamentos);

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
