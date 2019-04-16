<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DmicursosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DmicursosTable Test Case
 */
class DmicursosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DmicursosTable
     */
    public $Dmicursos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dmicursos',
        'app.areaspesquisas',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Dmicursos') ? [] : ['className' => DmicursosTable::class];
        $this->Dmicursos = TableRegistry::getTableLocator()->get('Dmicursos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dmicursos);

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
