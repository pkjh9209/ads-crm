<?

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'adm_password' => 'required|min:6'
        ]);
        $request->validate([
            'adm_id' => 'required|string|max:255|unique:users', // Custom and Add Code
            'adm_name' => ['required', 'string', 'max:255'],
            'adm_password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['adm_name' => $request->adm_name, 'password' => $request->adm_password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('adm_name', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
