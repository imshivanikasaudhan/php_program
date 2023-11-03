<?php

namespace App\Http\Controllers;

use App\Models\ServiceProviders;
use App\Models\User;

class ServiceProvidersController extends Controller
{
    public function save() {
        $userId = User::where('username', request('user_name'))->pluck('id')->first();

        if (is_null($userId) || empty($userId)) {
            return ['status' => 'error', 'message' => 'No user found with this username.', 'count' => 0];
        }

        $serviceProvider = ServiceProviders::where('phone', request('phone'));
        
        if (!empty(request('alternate_phone'))) {
            $serviceProvider = $serviceProvider->Orwhere('alternate_phone', request('alternate_phone'));
        }
        
        if (!empty(request('pan'))) {
            $serviceProvider = $serviceProvider->Orwhere('pan', request('pan'));
        }

        if (!empty(request('aadhar'))) {
            $serviceProvider = $serviceProvider->Orwhere('aadhar', request('aadhar'));
        }

        $serviceProvider = $serviceProvider->get();
        
        if ($serviceProvider->isNotEmpty()) {
            return ['status' => 'error', 'message' => 'User details already exist.', 'count' => 0];
        }

        $image = $this->saveImage(request('image'), request('name'));
        
        ServiceProviders::insert([
            'name' => request('name'),
            'image' => $image,
            'phone' => request('phone'),
            'alternate_phone' => request('alternate_phone'),
            'pan' => request('pan'),
            'aadhar' => request('aadhar'),
            'father_name' => request('father_name'),
            'dob' => request('dob'),
            'nationality' => request('nationality'),
            'address' => request('address'),
            'services' => request('services'),
            'created_by' => $userId,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        $count = ServiceProviders::where('created_by', $userId)->count();
        return ['status' => 'success', 'message' => 'Details saved successfully.', 'count' => $count];
    }

    public function saveImage($image, $name) {
        $file = base64_decode($image);
        $imageName = strtolower(str_replace(' ', '', $name)) .'_' . time() . '_profile.png';
        $success = file_put_contents(public_path().'/img/uploads/'.$imageName, $file);
        return $imageName;
    }

    public function list($username = 'all') {
        if ($username == 'all') {
            $serviceProviders = ServiceProviders::orderByDesc('id')->get();
        } else {
            $user_id = User::where('username', $username)->pluck('id')->first();
            $serviceProviders = ServiceProviders::where('created_by', $user_id)->orderByDesc('id')->get();
        }
        $users = User::orderByDesc('id')->select('name', 'username')->get();

        return view('service.list')
            ->withUsername($username)
            ->withUsers($users)
            ->withServiceProviders($serviceProviders);
    }
}
