<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
/**
 * @OA\Schema(
 *     schema="Role",
 *     title="Role",
 *     description="Role model",
 *     @OA\Property(
 *      property="id",
 *      type="integer",
 *      description="Role's id",
 *      title="id",
 *      example="1"    
 *     ),
 *     @OA\Property(
 *      property="name",
 *      type="string",
 *      description="Role's name",
 *      title="name",
 *      example="admin"    
 *     ),
 *     @OA\Property(
 *      property="description",
 *      type="string",
 *      description="Role's description",
 *      title="description",
 *      example="Administrator can do everything"    
 *     )
 * )
*/
}
