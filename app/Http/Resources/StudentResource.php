<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'id' => $this->id,
            'major_id' => $this->major_id,
            'name' => $this->name,
            'surname' => $this->surname,
            'personal_id' => $this->personal_id,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'address' => $this->address,
            'date_of_birth' => $this->date_of_birth,
            'sex' => $this->sex,
            'address_two' => $this->address_two,
            'number_of_apartment' => $this->number_of_apartment,
        ];
    }
}
