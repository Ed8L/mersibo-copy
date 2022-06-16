<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserTariff\StoreUserTariffRequest;
use App\Models\Tariff_user;
use App\Models\User;
use Illuminate\Http\Request;

class UsersTariffsController extends Controller
{

    public function index()
    {
        $users_tariffs = Tariff_user::all();

        return view('admin.users_tariffs.index', compact('users_tariffs'));
    }

    public function create()
    {
        return view('admin.users_tariffs.create');
    }

    public function store(StoreUserTariffRequest $request)
    {
        $email = $request->email;
        $tariff_id = $request->tariff_id;
        $tariff_type = $request->tariff_type;
        $end_time = $request->end_time;

        $user_tariff = new Tariff_user();
        $user_tariff->user_id = User::where('email', $email)->first()->id;
        $user_tariff->tariff_id = $tariff_id;
        $user_tariff->tariff_type = $tariff_type;
        $user_tariff->end_time = date('Y-m-d H:i:s', strtotime($end_time . ' +23 hours 59 minutes 59 seconds'));

        $user_tariff->save();

        //Email существует
        //tariff id есть в списке
        //tariff type есть в списке
        //Если уже есть запись с таким uid, то перенаправить на редактирование этого пользователя заполнив данные

    }

}
