<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Validator;
use DateTime;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //những trường được thao tác create,update với mass assignable
    protected $fillable = [
        'username', 'password', 'role', 'permission', 'fullname', 'birthday', 'address', 'phone', 'sex', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //những trường bị ẩn khi show
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    //tạo validator
    public function validateCreate($input = array())
    {
        # code...
        //tham số đầu tiên là dữ liệu request,2 là các rules, 3 là tùy chỉnh lại tin nhắn trả về
        $validator = Validator::make($input,
        [
            'username' => 'alpha_dash|unique:Users,username',
            'fullname' => 'required',
            'password' => 'required|alpha_dash|confirmed',
            'phone'    => 'digits_between:1,20|numeric',
            'sex'    => 'alpha_dash|max:2|min:1',
        ],
        [
            'confirmed'      => 'password chưa khớp dữ liệu',
            'unique'         => 'Tên tài khoản đã tồn tại',
            'digits_between' => 'Dữ liệu có độ dài không phù hợp',
            'required'       => 'Dữ liệu không được để trống',
            'alpha_dash'     => 'Không hợp lệ',
            'numeric'        => 'Trường phải là số',
            'max'            => 'Không hợp lệ',
            'min'            => 'Không hợp lệ',
        ]);
        return $validator;
    }

    public function validateUpdate($input = array())
    {
        # code...
        //tham số đầu tiên là dữ liệu request,2 là các rules, 3 là tùy chỉnh lại tin nhắn trả về
        $validator = Validator::make($input,
        [
            'fullname' => 'required',
            'phone'    => 'digits_between:1,20|numeric',
            'sex'    => 'alpha_dash|max:2|min:1',
        ],
        [
            'digits_between' => 'Dữ liệu có độ dài không phù hợp',
            'required'       => 'Dữ liệu không được để trống',
            'alpha_dash'     => 'Không hợp lệ',
            'numeric'        => 'Trường phải là số',
        ]);
        return $validator;
    }

    public function search($input) {
        $query = User::query();
        $appends = array();
        $data = null;

        $query->select('*');
        if (!empty($input)) {
            if (!empty($input['fullname'])) {
                $query->where('fullname', 'like', '%' . $input['fullname'] . '%');
                $appends['fullname'] = $input['fullname'];
            }
            if (!empty($input['username'])) {
                $query->where('username', 'like', '%' . $input['username'] . '%');
                $appends['username'] = $input['username'];
            }
            if (!empty($input['address'])) {
                $query->where('address', 'like', '%' . $input['address'] . '%');
                $appends['address'] = $input['address'];
            }
            if (!empty($input['sex'])) {
                $query->where('sex', $input['sex']);
                $appends['sex'] = $input['sex'];
            }
        }
        $data = $query->orderBy('id', 'desc')->paginate(6);
        return $data;
    }

    public function updateUser($input,$id)
    {
        $user = User::find($id);
        if(!empty($input['birthday'])){
            $input['birthday'] = date('Y-m-d',strtotime($input['birthday']));
        }else{
            $input['birthday'] = '';
        }
        $input['password'] = bcrypt($input['password']);
        $user->update($input);
        return $user;
    }

    public function saveUser($input)
    {
        if(!empty($input['birthday'])){
            $input['birthday'] = date('Y-m-d',strtotime($input['birthday']));
        }else{
            $input['birthday'] = '';
        }
        $input['password'] = bcrypt($input['password']);
        $user = new User($input);
        $user->save();
        return $user;
    }
}
