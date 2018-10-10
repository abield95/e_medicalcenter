<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelManagementController extends Controller
{

    public function addHealthCareProvider()
    {
        $RoleStatus = [
            'normal' => 'normal',
            'active' => 'active',
            'cancelled' => 'cancelled',
            'pending' => 'pending',
            'suspended' => 'suspended',
            'terminated' => 'terminated',
            'nullified' => 'nullified'
        ];

        $AdministrativeGender = [
            'F' => 'Female',
            'M' => 'Male',
            'UN' => 'Undifferentiated'
        ];

    	return view('PersonnelManagement.addHealthCareProvider', compact("RoleStatus", "AdministrativeGender"));
    }
}
