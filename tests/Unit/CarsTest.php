<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $car = new  CarsTest() ;
        $car->make = 'honda';
        $car->model = 'accprd';
        $car->year ='2018';




        $this->assertTrue(true);
    }





}
