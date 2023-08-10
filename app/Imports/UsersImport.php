<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {

        $validator = Validator::make($row, [
            'full_name' => 'required|string|max:100|min:3',
            'phone_number' => 'string|max:20',
            'email' => 'required|email|unique:users',
            
        ]);
        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first());
        }

        
        $userData = new User();
        $userData->full_name = $row['name'] ?? $row['full_name'] ?? $row['Full Name'] ?? $row['full name'];
        $userData->phone_number = $row['cell'] ?? $row['telephone number'] ?? $row['phone'] ?? $row['Phone'] ?? $row['Phone Number'] ;
        $userData->email = $row['email'] ?? $row['Email'];
        return $userData;
        
    }
}
