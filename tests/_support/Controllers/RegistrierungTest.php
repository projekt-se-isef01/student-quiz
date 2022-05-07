<?php

namespace Tests\Support\Controllers;

use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Database\Seeder;
use CodeIgniter\Test\FeatureTestTrait;
use CodeIgniter\Test\CIUnitTestCase;
class RegistrierungTest extends CIUnitTestCase
{
    use DatabaseTestTrait, FeatureTestTrait;
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public  function testregistrieren()
    {
        $result = $this
        ->controller('\App\Controllers\Registrierung::registrieren')
        ->execute('registrieren');

        $this->assertTrue($result->isOK());
            }
}