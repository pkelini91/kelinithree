<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {

        $user = User::find(1);
        $user->name = 'steve smith';
        $user->save();
        $this->assertInternalType('int', $user->id);

    }


    public function testDelete() {
        $user = new User();
        $user->name = 'Etha Carter';
        $user->save();


        $user->save();
        $this->assertTrue($user->delete());
    }





}










