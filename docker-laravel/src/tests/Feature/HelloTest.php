<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Person;
//use DatabaseMigrations;
use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;

class HelloTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    public function testHello(){
        /*$this->assertTrue(true);

        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/hello');
        $response->assertStatus(302);

        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('/hello');
        $response->assertStatus(200);

        $response = $this->get('/no_route');
        $response->assertStatus(404);*/
        //ダミーデータ
        User::factory()->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',

        ]);
        User::factory(10)->create();

        $this->assertDatabaseHas('users',[
            'name' => 'AAA',
            'email' => 'BBB@CCC.COM',
            'password' => 'ABCABC',
        ]);
        //ダミーデータ
        Person::factory()->create([
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 123,
        ]);
        Person::factory(10)->create();

        $this->assertDatabaseHas('people',[
            'name' => 'XXX',
            'mail' => 'YYY@ZZZ.COM',
            'age' => 123,
        ]);
    }
}
