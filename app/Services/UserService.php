<?php

    namespace App\Services;

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

    class UserService {
        public function createUser(Request $request): User
        {
            $user = User::create(
                [
                    'username' => $request->username,
                    'email' => $request->email,
                    'password'=> Hash::make($request->password),
                ]
            );
            return $user;
        }
    }

?>