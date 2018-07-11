<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;


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

    public function testDelete()
    {
        $question = new Car();
        $question->title = 'my question';
        $question->body = 'my body';
        $question->type = 'public';
        $question->save();
        $this->assertTrue($car->delete());
           }


    public function testCollectionCount() {
        $questions = Car::All();
        $recordCount = $questions->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount);
    }







}
