<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeticionesUsersTablekk;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeticionesUsersTablekk Test Case
 */
class PeticionesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeticionesUsersTablekk
     */
    protected $PeticionesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PeticionesUsers',
        'app.Peticiones',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PeticionesUsers') ? [] : ['className' => PeticionesUsersTablekk::class];
        $this->PeticionesUsers = $this->getTableLocator()->get('PeticionesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PeticionesUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesUsersTablekk::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesUsersTablekk::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
