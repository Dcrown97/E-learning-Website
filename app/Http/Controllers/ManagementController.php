<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\course;
use App\Models\lesson;
use App\Models\module;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ManagementController extends Controller
{

    public function  project()
    {
        $courses = course::paginate(9);
        return response()->json($courses);
    }

    public function project_single($id)
    {
        $Course = course::find($id);
        return response()->json($Course);
    }

    public function homePage()
    {
        $courses = course::where('featured', 'yes')->get();
        $categories = category::with("courses")->get();
        $lecture = User::where('type', 'instructor')->where('status', 'instructor')->get();



        return view('home', compact('courses', 'lecture', 'categories'));
    }


    public function Login(Request $request)
    {
        $user = new User();
        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'email' => 'required',
                'password' => 'required'
            ]);


            //Check with auth if the admin email and password matches the one in the database
            $email_pass = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            $checkType = User::where('email', $request->email)->first();
            $checkPoint = $checkType['type'];
            $check = $checkType['status'];



            //  dd($checkType);
            //If true run the if condition and let the admin login
            if ($email_pass && $checkPoint == 'student') {
                return redirect('/studentDashboard')->with('success', 'Welcome');
            } else if ($email_pass && $checkPoint == 'instructor') {
                if ($check == 'Suspended') {
                    return back()->with('error', 'Your Account Have Been Suspended');
                } else {
                    return redirect('/instructorDashboard')->with('success', 'Welcome');
                }
            } else if ($email_pass && $checkPoint == 'admin') {
                return redirect('/adminDashboard')->with('success', 'Welcome');
            } else {
                return back()->with('error', "Email or Password Incorrect");
            }
        }

        return view('login');
    }

    public function logout()
    {
        //Flush out the adminnin session
        Session::flush();

        return redirect('login');
    }


    public function Studentsignup(Request $request, $id = null)
    {
        //Declare an instance of a new user
        // $user = new User();
        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'Firstname' => 'required',
                'Lastname' => 'required',
                'Username' => 'required',
                'email' => 'required|unique:users',
                'Number' => 'required',
                'password' => 'required',
            ]);

            // Append the input to the variable user one by one and hash the password
            // $user->firstname = $request->firstname;
            // $user->lastname = $request->lastname;
            // $user->username = $request->username;
            // $user->email = $request->email;
            // $user->number = $request->number;
            $user = $request->all();
            // $user->password = Hash::make($request->password);
            // $user->type = 'student';
            $user['type'] = 'student';
            $user['password'] = Hash::make($request['password']);

            //save to db
            $save_to_db = User::create($user);
            //  dd($save_to_db);
            if ($save_to_db) {
                if ($id) {
                    Auth::attempt(["email" => $request->email, "password" => $request->password]);
                    $url = "/courseSingle/$id/" . base64_encode($save_to_db->id);
                    return redirect($url);
                } else if (!($id)) {
                    return redirect("/login")->with('success', 'Registration Successful!');
                } else {
                    return back()->with('error', 'Registration Failed!');
                }
            }
        }
        return view('studentsignup');
    }


    public function Instructorsignup(Request $request)
    {
        //Declare an instance of a new user
        $user = new User();
        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'username' => 'required',
                'email' => 'required|unique:users',
                'number' => 'required',
                'password' => 'required',
            ]);

            // Append the input to the variable user one by one and hash the password
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->number = $request->number;
            $user->password = Hash::make($request->password);
            $user->type = 'instructor';

            //save to db
            $save_to_db = $user->save();
            //  dd($save_to_db);
            if ($save_to_db) {
                return back()->with('success', 'Registration Successful!');
            }
        }
        return view('instructorsignup');
    }


    public function Adminsignup(Request $request)
    {
        //Declare an instance of a new user
        $user = new User();
        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'username' => 'required',
                'email' => 'required|unique:users',
                'number' => 'required',
                'password' => 'required',
            ]);

            // Append the input to the variable user one by one and hash the password
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->username = $request->username;
            $user->email = $request->email;
            $user->number = $request->number;
            $user->password = Hash::make($request->password);
            $user->type = 'admin';

            //save to db
            $save_to_db = $user->save();

            if ($save_to_db) {
                return back()->with('success', 'Registration Successful!');
            }
        }
        return view('adminsignup');
    }


    public function Course(Request $request, $id = null)
    {
        if ($request->isMethod("post")) {
            //this handle filter on courselist page
            if ($request->filter == 'new_courses') {
                $uploadedCourses = course::with("lessons")->orderBy('created_at', 'DESC')->paginate(9);
                $title = 'Sorting By New Courses';
            } elseif ($request->filter == 'low_to_high') {
                $uploadedCourses = course::with("lessons")->orderBy('price', 'ASC')->get();
                $title = 'Sorting From Low to High';
            } elseif ($request->filter == 'high_to_low') {
                $uploadedCourses = course::with("lessons")->orderBy('price', 'DESC')->get();
                $title = 'Sorting From High to Low';
            }
        } elseif ($id) {
            $category = category::find(base64_decode($id));
            $title = $category->name;
            $uploadedCourses = course::with("lessons")->where('category', '=', base64_decode($id))->orderBy('created_at', 'DESC')->get();
        } else {
            $title = 'All Courses';
            $uploadedCourses = course::with("lessons")->get();
        }

        // foreach($uploadedCourses as $course){
        //     dd($course['id']);
        // }
        return view("course", compact("uploadedCourses", "title"));
    }


    public function CourseSingle(Request $request, $user_id, $id = null)
    {
        // dd(base64_decode($request->id));

        if (Auth::check()) {
            $found = payment::where('course_id', base64_decode($id))->where('user_id', Auth::user()->id)->where('status', 'success')->get();
            if ($found->isNotEmpty()) {
                $paid = true;
            } else {
                $paid = false;
            }
        } else {
            $paid = false;
        }

        $courses = course::with(['user', 'cat'])->where('id', '=', base64_decode($request->id))->get();
        // if ($course) {
        //     $module = module::with('relatedLessons')->where('course_id', '=', $course->id)->get();
        // }
        // dd($course);
        $user = Auth::user();


        return view('courseSingle', compact("courses", 'user_id', "user", 'paid'));
    }


    public function StudentDashboard()
    {
        $students = Auth::user();

        return view('studentDashboard', compact('students'));
    }


    public function StudentProfile()
    {
        $students = Auth::user();

        return view('studentProfile', compact('students'));
    }


    public function StudentCourse()
    {
        $students = Auth::user();

        return view('studentCourse', compact('students'));
    }


    public function InstructorDashboard()
    {
        $instructor = Auth::user();

        return view('instructorDashboard', compact('instructor'));
    }


    public function InstructorProfile()
    {
        $instructor = Auth::user();

        return view('instructorProfile', compact('instructor'));
    }


    public function InstructorCourse(Request $request)
    {
        $instructor_course = course::where('user_id', Auth::user()->id)->get();
        $instructor = Auth::user();

        return view('instructorCourse', compact('instructor_course', 'instructor'));
    }


    public function InstructorStudent()
    {
        $instructor = Auth::user();

        return view('instructorStudent', compact('instructor'));
    }


    public function CreateCourse(Request $request)
    {
        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'title' => 'required',
                'duration' => 'required',
                'language' => 'required',
                'price' => 'required',
                'description' => 'required',
                'category' => 'required',
            ]);

            $all_courses = $request->all();
            $user_id = Auth::user()->id;
            $all_courses['user_id'] = $user_id;

            $save_to_db = course::create($all_courses);
            $course_id = $save_to_db['id'];

            return redirect()->route('lesson', ['new' => $course_id]);
        }

        $categories = category::all();
        $instructor = Auth::user();

        return view('/createCourse', compact('categories', 'instructor'));
    }

    public function Lesson(Request $request)
    {
        $data = $request->new;
        if ($request->isMethod('POSt')) {
            $request->validate([
                'module' => 'required',
                'lesson1_title' => 'required',
                'lesson1_video' => 'required',
                'lesson2_title' => 'required',
                'lesson2_video' => 'required',
                'lesson3_title' => 'required',
                'lesson3_video' => 'required',
                'lesson4_title' => 'required',
                'lesson4_video' => 'required',
            ]);

            $data = $request->all();
            // $modules = new module();
            $modules['title'] = $data['module'];
            $modules['user_id'] = Auth::user()->id;
            $modules['course_id'] = $data['new'];
            $module_id = module::create($modules)->id;

            if ($data['lesson1_title'] != null) {
                $lesson['title'] = $data['lesson1_title'];
                $lesson['video_link'] = $data['lesson1_video'];
                $lesson['user_id'] = Auth::user()->id;;
                $lesson['course_id'] = $data['new'];
                $lesson['module_id'] = $module_id;
                $saved = Lesson::create($lesson);
            }
            if ($data['lesson2_title'] != null) {
                $lesson['title'] = $data['lesson2_title'];
                $lesson['video_link'] = $data['lesson2_video'];
                $lesson['user_id'] = Auth::user()->id;;
                $lesson['course_id'] = $data['new'];
                $lesson['module_id'] = $module_id;
                $saved = Lesson::create($lesson);
            }
            if ($data['lesson3_title'] != null) {
                $lesson['title'] = $data['lesson3_title'];
                $lesson['video_link'] = $data['lesson3_video'];
                $lesson['user_id'] = Auth::user()->id;;
                $lesson['course_id'] = $data['new'];
                $lesson['module_id'] = $module_id;
                $saved = Lesson::create($lesson);
            }
            if ($data['lesson4_title'] != null) {
                $lesson['title'] = $data['lesson4_title'];
                $lesson['video_link'] = $data['lesson4_video'];
                $lesson['user_id'] = Auth::user()->id;;
                $lesson['course_id'] = $data['new'];
                $lesson['module_id'] = $module_id;
                $saved = Lesson::create($lesson);
            }

            $data = $data['new'];
            $instructor = Auth::user();

            return view('lesson', compact('data', 'instructor'));
        }
        return view('lesson');
    }


    public function AdminDashboard()
    {
        $admins = Auth::user();

        return view('adminDashboard', compact('admins'));
    }


    public function Addcategory(Request $request)
    {
        if ($request->isMethod("post")) {

            category::create($request->all());
        }
        $categories = category::all();
        $admins = Auth::user();

        return view("addcategory", compact("categories", 'admins'));
    }


    public function AdminProfile()
    {
        $admins = Auth::user();
        return view('adminProfile', compact('admins'));
    }


    public function AdminCourse()
    {
        $admin_course = course::all();
        $admins = Auth::user();
        return view('adminCourse', compact('admin_course', 'admins'));
    }


    public function AdminStudent(Request $request)
    {
        $students = User::all()->where('type', 'student');
        $admins = Auth::user();

        return view('adminStudent', compact('students', 'admins'));
    }


    public function AdminInstructor(Request $request)
    {

        //Check if the form method is post and validate
        if ($request->isMethod('POST')) {
            $request->validate([
                'type' => 'required'
            ]);

            //Check the User where 

            $check =  User::where(['id' => $request->id])->update(['status' => $request->type]);

            return back()->with('success', 'Updated Successfully');
        }
        // $instructors = User::find($request->id);

        $instructors = User::all()->where('type', 'instructor');

        // $instructors1 = User::all()->where('status', '=', 'instructor'  );
        // $instructors2 = User::all()->where('status', '=', 'Suspend'  );   
        // $instructors=[$instructors1,$instructors2];                 
        // dd($instructors);

        $admins = Auth::user();


        return view('adminInstructor', compact('instructors', 'admins'));
    }


    public function feature_a_course($id)
    {
        $course = course::find(base64_decode($id));
        if ($course) {
            if ($course->featured == 'yes') {
                $course->featured = 'no';
                $msg = 'Courses un-featured!';
            } else {
                $course->featured = 'yes';
                $msg = 'Courses featured!';
            }
            $course->save();
        } else {
            $msg = 'Courses not found!';
        }

        return back()->with("msg", $msg);
    }

    public function payment(Request $request)
    {
        //  dd($request->all());
        if ($request['response']['status'] == 'success') {
            //for debby's sake
            $all_request = $request->all();
            $all_request["course_id"] = $request['course_id'];
            $all_request["user_id"] = $request['student_id'];
            $all_request["instructor_id"] = $request['instructor_id'];
            $all_request["amount_paid"] = $request['amount_paid'];
            $all_request["status"] = $request['response']['status'];
            $all_request["ref"] = $request['response']['reference'];

            if (Payment::create($all_request)) {
                return response()->json([
                    'status' => 'success',
                    'code' => 200
                ]);
            }
        } else {
            return response()->json([
                'status' => 'failed',
                'code' => 400
            ]);
        }
    }
}
