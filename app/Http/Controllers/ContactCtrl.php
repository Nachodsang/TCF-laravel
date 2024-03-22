<?php

namespace App\Http\Controllers;

use App\Models\AddressMd;
use App\Models\ContactMd;
use App\Models\SeoMd;
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
        try {
            $contactTag = SeoMd::where('name', 'contact')->first();
            $contact = ContactMd::find(1);
            $map = AddressMd::all();
            $data = [
                'folder_prefix' => $this->config['folder_prefix'],
                'contact' => $contact,
                'map' => $map,
                'seo' => $contactTag
            ];
            return view($this->config['folder_prefix'] . "/contact", $data);
        } catch (\Exception $e) {
            abort(500);
            // return $e->getMessage();
        }
    }
}
