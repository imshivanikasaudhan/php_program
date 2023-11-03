<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ServiceProviders;
use Response;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.index');
    }

    public function export() {
        return view('dashboard.export');
    }

    public function download() {
        if (request('type') == 'custom' && request('range') == 'today') {
            $data = ServiceProviders::whereDate('created_at', \Carbon\Carbon::today())->with('user')->get();
        } else if (request('type') == 'custom' && request('range') == 'yesterday') {
            $data = ServiceProviders::whereDate('created_at', \Carbon\Carbon::yesterday())->with('user')->get();
        }else if (request('type') == 'custom' && !in_array(request('range'), ['yesterday', 'today'])) {
            $from = \Carbon\Carbon::today();
            $to = \Carbon\Carbon::today()->subDays(request('range'));
            $data = ServiceProviders::whereDate('created_at', '<=', $from)->whereDate('created_at', '>=', $to)->with('user')->get();
        } else {
            $data = ServiceProviders::with('user')->get();
        }

        $filename =  public_path("file/serviceproviders.csv");
        $file = fopen($filename, 'w');
        fputcsv($file, [
            'name' => 'Name',
            'phone' => 'Phone Number',
            'alternate_phone' => 'Alternate Phone Number',
            'pan' => 'PAN',
            'aadhar' => 'Aadhar',
            'father_name' => 'Father\'s Name',
            'dob' => 'DOB',
            'address' => 'Address',
            'nationality' => 'Nationality',
            'services' => 'Services',
            'created_at' => 'Created At',
            'user' => 'Profile By',
            'user_phone' => 'Creator Phone',
            'username' => 'Creator Username',
        ]);
        foreach ($data as $info) {
            fputcsv($file, [
                'name' => $info->name,
                'phone' => $info->phone,
                'alternate_phone' => $info->alternate_phone,
                'pan' => $info->pan,
                'aadhar' => $info->aadhar,
                'father_name' => $info->father_name,
                'dob' => $info->dob,
                'address' => $info->address,
                'nationality' => $info->nationality,
                'services' => $info->services,
                'created_at' => $info->created_at,
                'user' => $info->user->name,
                'user_phone' => $info->user->phone,
                'username' => $info->user->username,
            ]);
        }
        fclose($file);
        return response()->download($filename, "serviceproviders.csv", ['Content-Type: application/csv']);
    }
}
