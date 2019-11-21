<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;
use View;
use Session;
use Excel;
use Auth;

class UserController extends Controller
{

    public function __construct(User $user)
    {
        $this->user =   $user;
    }

    public function index(Request $req)
    {
        $input = Input::all('_token');
        if(empty($input['start_date'])){
            $input['start_date'] = date('d/m/Y');
            $input['end_date'] = date('d/m/Y');
        }
        $users = $this->user->search($input);
        if($req->ajax()){
            return response()->json(['data'=>$users]);
        }
        return view('admin.user.index',compact('users','input'));
    }

    public function create()
    {
        $input = Input::all();
        if(!empty($input)){
            $validator = $this->user->validateCreate($input);
            if($validator->fails()){
                return redirect()->route('admin.user.create')->withInput()->withErrors($validator);
            }else{
                if($this->user->saveUser($input)){
                    return redirect()->route('admin.user.index')->with('thongbao','Thêm thành công');
                }else{
                    return redirect()->route('admin.user.index')->with('thongbao','Không thành công');
                }
            }
        }
        return view('admin.user.create');
    }

    public function edit($id = '')
    {
        $input = Input::all();
        $user = $this->user->find($id);

        if(empty($user)){
            return redirect()->route('admin.user.index');
        }

        if(!empty($input)){
            $validator = $this->user->validateUpdate($input);
            if($validator->fails()){
                return view('admin.user.edit', compact('input','user'))->withErrors($validator);
            }else{
                if($this->user->updateUser($input,$id)){
                    return redirect()->route('admin.user.index')->with('thongbao','Sửa thành công');
                }else{
                    return redirect()->route('admin.user.index')->with('thongbao','Sửa hông thành công');
                }
            }
        }
        return view('admin.user.edit', compact('user'));
    }

    public function delete($id = '')
    {
        $user = $this->user->find($id);

        if(empty($user)){
            return redirect()->route('admin.user.index');
        }

        return redirect()->route('admin.user.index')->with(
            'thongbao', $user->delete() ? 'Xóa thành công' : 'Xóa không thành công'
        );
    }

    public function profile()
    {
        $user = Auth::user();

        return view('admin.user.profile', compact('user'));
    }
}
