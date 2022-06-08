<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        //
    }

    public function getTemplateData() {
        //fetch template data from database

        $data = "kidus";
        return ["Name"=>$data];
    }

    public function insertData() {
        //insert data of a template`
    }

    public function updateTemplateData() {
        //update the database template data for users

        return ("This API route is for putting users data in database");
    }

    
}
