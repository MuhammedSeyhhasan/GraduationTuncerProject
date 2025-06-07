<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin; 

class AdminController extends Controller
{
    
    
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);

        $admin = User::where('email', $request->input('email'))->first();

        if (!$admin || !Hash::check($request->input('password'), $admin->password)) {
            return back()->withErrors(['email' => 'Invalid credentials']);
        }

        // خزّن جلسة الأدمن
        session(['LoggedAdminInfo' => $admin->id]);

        return redirect()->route('admin.dashboard');
    }
        
    public function showRegister()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Create a new admin
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password); // Hash the password before saving

        $admin->picture = $request->picture ?: 'login-bg.jpg'; 
        $admin->bio = $request->bio ?? 'ADMIN';  // أو يمكنك تعيينه إلى قيمة ADMIN
        
        $admin->save();

        // Redirect to the login page with a success message
        return redirect()->route('admin.login')->with('success', 'Registration successful. Please login.');
    }


    public function showDashboard()
    {
        $LoggedAdminInfo = User::find(session('LoggedAdminInfo'));
    
        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the dashboard');
        }
    
        return view('admin.dashboard', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
        ]);
    }


    public function showLogin()
    {
        return view('admin.login');
    }
    


    public function logout()
        {
            session()->forget('LoggedAdminInfo');
            
            return redirect()->route('home.index');
        }



        public function showProfile(Request $request)
    {
        // Get the logged-in admin's information from the session
        $LoggedAdminInfo = User::find(session('LoggedAdminInfo'));
    
        if (!$LoggedAdminInfo) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to access the profile page');
        }
    
        // Pass the admin data to the profile view
        return view('admin.profile', [
            'LoggedAdminInfo' => $LoggedAdminInfo,
        ]);
    }



    public function updateProfile(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Get the logged-in admin's ID from the session
        $loggedAdminId = session('LoggedAdminInfo');
    
        if (!$loggedAdminId) {
            return redirect()->route('admin.login')->with('fail', 'You must be logged in to update the profile');
        }
    
        $admin = User::find($loggedAdminId);
    
        if (!$admin) {
            return redirect()->route('admin.login')->with('fail', 'Admin not found');
        }
    
        // Update the admin's information
        $admin->name = $request->input('name');
        $admin->bio = $request->input('bio');
    
        // Handle the profile picture upload
        if ($request->hasFile('picture')) {
            // Delete old picture if it exists
            if ($admin->picture) {
                Storage::disk('public')->delete($admin->picture);
            }
    
            // Store the new picture
            $file = $request->file('picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_pictures', $filename, 'public');
    
            $admin->picture = $path;
        }
    
        $admin->save();
    
        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }

    // جلب جميع المستخدمين
    public function showusers()
    {
        $users = User::all(); 

        return view('admin.showusers', compact('users')); 
    }

    // Remove the user from storage
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.showusers')
        ->with('success', 'User deleted successfully.');
    }

}
