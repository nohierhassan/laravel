<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;
class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'posted_by'=> $this->user_id,

            // 'user_info'=>[
            //     'id' => $this->user_id ? $this->user_id : 'not exist',
            //     'name' => $this->user->name,
            //     'email' =>  $this->user->email,
            // ]
            // # instead of the above code we can make the user in a separate API Resource in order
            // # to make it reusable in  any other API Resource 
            'user_info'=> new UserResource($this->user),
        ];
    }
}
