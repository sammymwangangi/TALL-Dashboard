<?php

namespace App\Http\Controllers;

// use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Charts\SampleChart;

class ProfileController extends Controller
{
    public function index()
    {
        $chart = new SampleChart;
        $chart->labels(["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]);
        $chart->dataset('Earnings', 'line', [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000])
            ->lineTension(0.3)
            ->backgroundColor("rgba(78, 115, 223, 0.05)")
            ->color("#4fd1c5")
        ;
        
        $chart2 = new SampleChart;
        $chart2->labels(["Direct", "Referral", "Social"]);
        $chart2->dataset('My dataset', 'pie', [55, 30, 15])->backgroundColor(['#4e73df', '#1cc88a', '#36b9cc']);

        return view('profile.index', compact('chart', 'chart2'));
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
