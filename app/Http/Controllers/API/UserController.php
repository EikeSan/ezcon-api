<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role\Role;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Validator;

class UserController extends Controller
{
    public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json($success, $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
    
    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'confirmPassword' => 'required|same:password', 
        ]);
        
        if ($validator->fails()) { 
            return response()->json([
                'status' => 'ERROR_VALIDATION',
                'error'=>$validator->errors()
                ], 422);            
        }
        
        $input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $res['message'] = 'User created';
        $res['name'] =  $user->name;
        $res['code'] = 201;
    
        
        return response()->json($res, 201); 
    }
    
    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() { 
        $user = Auth::user()::with('roles')->get(); 
        return response()->json($user, $this-> successStatus); 
    }

    public function addRoles(Request $request) {
        try {
            $user = new User($request->get('user'));
            $user = User::with('roles')->findOrfail($user->id);
            $roles = array();
            foreach ($request->get('roles') as $role) {
                $role = new Role($role);
                $role = Role::findOrFail($role->id);
                array_push($roles, $role->id);
            };
            $user->roles()->syncWithoutDetaching($roles);
            $user = User::with('roles')->find($user->id);
            return response()->json($user, $this-> successStatus); 
        } catch (ModelNotFoundException $e) {
            report($e);
            $res['message'] = 'Not Found: ' . $e->getMessage();
            $res['code'] = 404;
            return response()->json($res, 404); 
        }
    }

    public function removeRoles(Request $request) {
        try {
            $user = new User($request->get('user'));
            $user = User::with('roles')->findOrfail($user->id);
            
            $roles = array();
            foreach ($user->roles as $role ) {
                array_push($roles, $role->id);
            }
            
            $rolesToRemove = array();
            foreach ($request->get('roles') as $role) {
                $role = new Role($role);
                $role = Role::findOrFail($role->id);
                array_push($rolesToRemove, $role->id);
            };
            $roles = array_diff($roles, $rolesToRemove);
            Log::debug($roles);
            $user->roles()->sync($roles);
            $user = User::with('roles')->find($user->id);
            return response()->json($user, $this-> successStatus); 
        } catch (ModelNotFoundException $e) {
            report($e);
            $res['message'] = 'Not Found: ' . $e->getMessage();
            $res['code'] = 404;
            return response()->json($res, 404); 
        }
    }
}
