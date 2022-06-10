<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Http\Controllers\VendedoresController;

class VendedoresControllerTest extends TestCase
{
    private $vendedores;

    public function __construct()
    {
        parent::__construct();
        $this->vendedores = new VendedoresController;
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCheckVendedor()
    {
        $this->assertTrue($this->vendedores->checkVendedor(1));
        $this->assertFalse($this->vendedores->checkVendedor(20));
    }

    public function testGetVendedor()
    {
        $this->assertEquals('Paulo', $this->vendedores->getVendedor(2));
    }
}
