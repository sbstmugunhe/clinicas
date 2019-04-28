<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CampanhasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CampanhasTable Test Case
 */
class CampanhasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CampanhasTable
     */
    public $Campanhas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.campanhas',
        'app.unidades',
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
        $config = TableRegistry::getTableLocator()->exists('Campanhas') ? [] : ['className' => CampanhasTable::class];
        $this->Campanhas = TableRegistry::getTableLocator()->get('Campanhas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Campanhas);

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
