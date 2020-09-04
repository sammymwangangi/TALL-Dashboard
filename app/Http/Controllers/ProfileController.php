<?php

namespace App\Http\Controllers;

// use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index()
    {
        $earnings_chart = (new LarapexChart)
            ->setType('line')
            ->setTitle('Earnings')
            ->setXAxis([
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ])
            ->setDataset([
                [
                    'name'  =>  'Earnings',
                    'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                ]
            ])
        ;

        $statics_chart = (new LarapexChart)
            ->setTitle('Statics')
            ->setType('area')
            ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"])
            ->setDataset([
                [
                    'name'  =>  'Statics',
                    'data'  =>  [55, 30, 15]
                ]
            ])
        ;

        return view('profile.index', compact('earnings_chart', 'statics_chart'));
    }
    public function changePassword()
    {
        return view('profile.changePassword');
    }
    public function postChangePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|confirmed'
        ]);
        $password = bcrypt($request->password);
        DB::table('users')->where('id', $id)->update(['password' => $password]);
        return redirect()->back()->with('info', 'Password has been updated!');
    }
    public function editprofile($id)
    {
        $user = Auth::user();
        return view('profile.edit')->withUser($user);
    }
    public function posteditprofile(Request $request)
    {
        //dd($request->all());
        $user = Auth::user();
        try {
            $user->update(array_merge($request->all()));
            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->avatar->move('images/users/', $fileName);
                $user->update(['avatar' => $fileName]);
                //dd($fileName);
            }
            return redirect()->back()->with('success', 'Your profile has been updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating profile data, please try again!');
        }
    }
    public function github(){

        $earnings_chart = (new LarapexChart)
            ->setType('line')
            ->setTitle('Earnings')
            ->setXAxis([
                'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'
            ])
            ->setDataset([
                [
                    'name'  =>  'Earnings',
                    'data'  =>  [0, 10000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
                ]
            ])
        ;

        $statics_chart = (new LarapexChart)
            ->setTitle('Statics')
            ->setType('area')
            ->setColors(['#4e73df', '#1cc88a', '#36b9cc'])
            ->setLabels(["Direct", "Referral", "Social"])
            ->setDataset([
                [
                    'name'  =>  'Statics',
                    'data'  =>  [55, 30, 15]
                ]
            ])
        ;
        $repository = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard')->json();
        $contributor = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard/contributors')->json();
        $language = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard/languages')->json();
        $owner = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard')->json()['owner'];
        $views = Http::get('https://api.github.com/repos/sammymwangangi/TALL-Dashboard/traffic/views')->json();
        dump($repository);
        dump($owner);
        dump($contributor);
        dump($language);
        dump($views);
        return view('github', compact('earnings_chart', 'statics_chart', 'repository', 'owner', 'contributor', 'language', 'views'));
    }
    // public function cover(Request $request)
    // {
        //dd($request->all());
        // $user = Auth::user();
        // try {
        //     $user->update(array_merge($request->all()));
        //     if ($request->hasFile('cover')) {
        //         $file = $request->file('cover');
        //         $fileName = time() . '.' . $file->getClientOriginalExtension();
        //         $request->cover->move('images/users/', $fileName);
        //         $user->update(['cover' => $fileName]);
        //     }
        //     return redirect()->back()->with('success', 'Your profile has been updated successfully!');
        // } catch (\Exception $e) {
        //     return redirect()->back()->with('error', 'An error occurred while updating profile data, please try again!');
        // }
    // }
}
