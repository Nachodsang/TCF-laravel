<?php

namespace App\Http\Controllers;

use App\Models\AddressMd;
use App\Models\ContactMd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ContactCtrl extends Controller
{
    public function __construct()
    {
        $this->config = Config::get('web');
    }

    public function index()
    {
        $service_cats = \App\Models\ServiceCatMd::orderBy('number')->get();
        $contact = ContactMd::find(1);
        $map = AddressMd::all();
        $data = [
            'folder_prefix' => $this->config['folder_prefix'],
            'contact' => $contact,
            'map' => $map,
            'service_cats' => $service_cats,
        ];
        return view($this->config['folder_prefix'] . "/contact", $data);
    }
}
