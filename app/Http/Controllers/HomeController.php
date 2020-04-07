<?php

namespace App\Http\Controllers;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // // $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
        
        // // $startDate = Carbon::now()->subMonths(2);
        // $startDate = Carbon::now()->subdays(2);
        // // $endDate = Carbon::now()->subMonth();
        // $endDate = Carbon::now();
        
        // $visists = Period::create($startDate, $endDate);
        // $analyticsData = Analytics::performQuery($visists,'ga:pageviews');
        // dd($analyticsData[0][0]);

        // dd($visists);

        return view('dashboard');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create_roles_and_permissions()
    {
        /**
         * Pages like FAQ, About and Legal Pages
         * 
         * Role: Page Manager
         * Permissions: Add|Edit|Remove|Activete Pages
         */
        $page = Role::create(['name' => 'pages manager']);
        $add_page = Permission::create(['name' => 'add page']);
        $edit_page = Permission::create(['name' => 'edit page']);
        $remove_page = Permission::create(['name' => 'remove page']);
        $activate_page = Permission::create(['name' => 'activate page']);
        $page->givePermissionTo($add_page);
        $page->givePermissionTo($edit_page);
        $page->givePermissionTo($remove_page);
        $page->givePermissionTo($activate_page);

        /**
         * Tools like JSON Formatter and Passwords Generator
         * 
         * Role: Tools Manager
         * Permissions: Add|Edit|Remove|Activete Tools
         */
        $tool = Role::create(['name' => 'tools manager']);
        $add_tool = Permission::create(['name' => 'add tool']);
        $edit_tool = Permission::create(['name' => 'edit tool']);
        $remove_tool = Permission::create(['name' => 'remove tool']);
        $activate_tool = Permission::create(['name' => 'activate tool']);
        $tool->givePermissionTo($add_tool);
        $tool->givePermissionTo($edit_tool);
        $tool->givePermissionTo($remove_tool);
        $tool->givePermissionTo($activate_tool);

        /**
         * Tools Details like "About" Sections and "How to use this tool?" section
         * 
         * Role: Tools Details Editor
         * Permissions: Edit|Activete Tools Details
         */
        $tool_page = Role::create(['name' => 'tools details editor']);
        $edit_tool_page = Permission::create(['name' => 'edit tool page']);
        $activate_tool_page = Permission::create(['name' => 'activate tool page']);
        $tool_page->givePermissionTo($edit_tool_page);
        $tool_page->givePermissionTo($activate_tool_page);

        /**
         * Categories like Development Tools and Security Tools
         * 
         * Role: Categories Manager
         * Permissions: Add|Edit|Remove|Activete Categories
         */
        $category = Role::create(['name' => 'categories manager']);
        $add_category = Permission::create(['name' => 'add category']);
        $edit_category = Permission::create(['name' => 'edit category']);
        $remove_category = Permission::create(['name' => 'remove category']);
        $activate_category = Permission::create(['name' => 'activate category']);
        $category->givePermissionTo($add_category);
        $category->givePermissionTo($edit_category);
        $category->givePermissionTo($remove_category);
        $category->givePermissionTo($activate_category);

        /**
         * Status like Users Views, Clicks and Actions
         * 
         * Role: Status Analyzer
         * Permissions: View Status
         */
        $status = Role::create(['name' => 'status analyzer']);
        $view_status = Permission::create(['name' => 'view status']);
        $status->givePermissionTo($view_status);

        /**
         * Users and Roles
         * 
         * Role: Users Manager
         * Permissions: Add|Edit|Remove|Activete Users
         */
        $user = Role::create(['name' => 'users manager']);
        $add_user = Permission::create(['name' => 'add user']);
        $edit_user = Permission::create(['name' => 'edit user']);
        $remove_user = Permission::create(['name' => 'remove user']);
        $activate_user = Permission::create(['name' => 'activate user']);
        $user->givePermissionTo($add_user);
        $user->givePermissionTo($edit_user);
        $user->givePermissionTo($remove_user);
        $user->givePermissionTo($activate_user);

        /**
         * Settings like Navbar links and Footer Sections
         * 
         * Role: Settings Manager
         * Permissions: Edit Settings
         */
        $settings = Role::create(['name' => 'settings manager']);
        $edit_settings = Permission::create(['name' => 'edit settings']);
        $settings->givePermissionTo($edit_settings);

        /**
         * Subscripers from Newsletter
         * 
         * Role: Subscripers Manager
         * Permissions: Add|Edit|Remove|Activete Subscriper
         */
        $subscripers = Role::create(['name' => 'subscripers manager']);
        $add_subscriper = Permission::create(['name' => 'add subscriper']);
        $edit_subscriper = Permission::create(['name' => 'edit subscriper']);
        $remove_subscriper = Permission::create(['name' => 'remove subscriper']);
        $view_subscriper = Permission::create(['name' => 'view subscriper']);
        $subscripers->givePermissionTo($add_subscriper);
        $subscripers->givePermissionTo($edit_subscriper);
        $subscripers->givePermissionTo($remove_subscriper);
        $subscripers->givePermissionTo($view_subscriper);
        
        /**
         * Contact Messages from Contact Page
         * 
         * Role: Contact Manager
         * Permissions: Reply|Remove|View Message
         */
        $messages = Role::create(['name' => 'messages manager']);
        $view_message = Permission::create(['name' => 'view message']);
        $reply_message = Permission::create(['name' => 'reply message']);
        $remove_message = Permission::create(['name' => 'remove message']);
        $messages->givePermissionTo($view_message);
        $messages->givePermissionTo($reply_message);
        $messages->givePermissionTo($remove_message);
        
        /**
         * Role: Super administrator
         * Permissions: Add|Edit|Reply|Remove|View Everything
         */
        $superadmin = Role::create(['name' => 'superadmin']);
        $superadmin->givePermissionTo($add_page);
        $superadmin->givePermissionTo($edit_page);
        $superadmin->givePermissionTo($remove_page);
        $superadmin->givePermissionTo($activate_page);
        $superadmin->givePermissionTo($add_tool);
        $superadmin->givePermissionTo($edit_tool);
        $superadmin->givePermissionTo($remove_tool);
        $superadmin->givePermissionTo($activate_tool);
        $superadmin->givePermissionTo($edit_tool_page);
        $superadmin->givePermissionTo($activate_tool_page);
        $superadmin->givePermissionTo($add_category);
        $superadmin->givePermissionTo($edit_category);
        $superadmin->givePermissionTo($remove_category);
        $superadmin->givePermissionTo($activate_category);
        $superadmin->givePermissionTo($view_status);
        $superadmin->givePermissionTo($add_user);
        $superadmin->givePermissionTo($edit_user);
        $superadmin->givePermissionTo($remove_user);
        $superadmin->givePermissionTo($activate_user);
        $superadmin->givePermissionTo($edit_settings);
        $superadmin->givePermissionTo($add_subscriper);
        $superadmin->givePermissionTo($edit_subscriper);
        $superadmin->givePermissionTo($remove_subscriper);
        $superadmin->givePermissionTo($view_subscriper);
        $superadmin->givePermissionTo($reply_message);
        $superadmin->givePermissionTo($remove_message);
        $superadmin->givePermissionTo($view_message);
        
        /**
         * Role: administrator
         * Permissions: Add|Edit|Reply|Remove|View Everything Except Tools
         */
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo($add_page);
        $admin->givePermissionTo($edit_page);
        $admin->givePermissionTo($remove_page);
        $admin->givePermissionTo($activate_page);
        $admin->givePermissionTo($edit_tool_page);
        $admin->givePermissionTo($activate_tool_page);
        $admin->givePermissionTo($add_category);
        $admin->givePermissionTo($edit_category);
        $admin->givePermissionTo($remove_category);
        $admin->givePermissionTo($activate_category);
        $admin->givePermissionTo($view_status);
        $admin->givePermissionTo($add_user);
        $admin->givePermissionTo($edit_user);
        $admin->givePermissionTo($remove_user);
        $admin->givePermissionTo($activate_user);
        $admin->givePermissionTo($edit_settings);
        $admin->givePermissionTo($add_subscriper);
        $admin->givePermissionTo($edit_subscriper);
        $admin->givePermissionTo($remove_subscriper);
        $admin->givePermissionTo($view_subscriper);
        $admin->givePermissionTo($reply_message);
        $admin->givePermissionTo($remove_message);
        $admin->givePermissionTo($view_message);

        $first_user = User::find(1);
        $first_user->assignRole('superadmin');
        // page		admin|(add page|edit page|remove page|activate page)
        // tool		admin|(add tool|edit tool|remove tool|activate tool)
        // tool page	admin|(edit tool page|activate tool page)
        // category	admin|(add category|edit category|remove category|activate category)
        // status		admin|(view status)
        // user		admin|(add user|edit user|remove user|activate user)
        // settings	admin|(edit settings)
        // emails		admin|(add mail|edit mail|remove mail|view mail)
        // contact		admin|(add message|edit message|remove message|view message)

        if (auth()->user()->hasRole('superadmin')) {
            return 'all roles and permissions are created successfuly and you\'r superadmin now';
        }
        return 'all roles and permissions are created successfuly but you ARE NOT superadmin';
    }
}
