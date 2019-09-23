<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase {
    
    use DatabaseTransactions;
    private $user = [
        'name' => 'teste',
        'email' => 'teste@email.com',
        'password' => '123456',
        'confirmPassword' => '123456'
    ];

    protected function headers($user = null) {
        $headers = ['Accept' => 'application/json'];

        if (!is_null($user)) {
            $token = $user->createToken('Token Name')->accessToken;
            $headers['Authorization'] = 'Bearer ' . $token;
        }

        return $headers;
    }

    public function testShouldCreateUser(){
        $response = $this->json('POST', 'signUp',$this->user);

        $response
            ->assertStatus(201);
    }

    public function testShouldNotCreateUser(){ 
        $response = $this->json('POST', 'signUp',
        [
             'email' => 'teste@email.com',
             'password' => '123456'
        ]);

        $response
            ->assertStatus(422)
            ->assertJson(
            [
                'status' => 'ERROR_VALIDATION'
            ]);
    }

    // public function testShouldReturStatusDuplicated(){
    //     $response = $this->json('POST', 'signUp',$this->user);

    //     $response = $this->json('POST', 'signUp',$this->user);

    //     $response
    //         ->assertStatus(422)
    //         ->assertJson(
    //         [
    //             'status' => 'ERRO_VALIDACAO'
    //         ]);
    // }
    public function testShouldRertunUserInfo(){
        $user = User::create($this->user);
        $token = $this->headers($user);
        
        $request = $this->json('GET','users/me',[],$token);

        $request->assertStatus(200)
            ->assertJsonFragment(['id' => $user->id, 'name' => $user->name]);
    }

    public function testShouldUnauthorizeUser(){
        
        $request = $this->json('GET','users/me',[],['Authorization' => 'Bearer ashuhuashusashu']);

        $request
            ->assertStatus(401)
            ->assertJson(['message' => 'Unauthenticated.']);
    }
}
