<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstudantesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstudantesTable Test Case
 */
class EstudantesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EstudantesTable
     */
    public $Estudantes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.estudantes',
        'app.occupations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Estudantes') ? [] : ['className' => EstudantesTable::class];
        $this->Estudantes = TableRegistry::getTableLocator()->get('Estudantes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estudantes);

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
