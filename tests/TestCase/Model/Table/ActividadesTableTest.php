<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadesTable Test Case
 */
class ActividadesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ActividadesTable
     */
    public $Actividades;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.actividades',
        'app.trabalhos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Actividades') ? [] : ['className' => ActividadesTable::class];
        $this->Actividades = TableRegistry::getTableLocator()->get('Actividades', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Actividades);

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
