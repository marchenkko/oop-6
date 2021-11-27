<?php
class Control
{

    public function filter($users)
    {
        $allowed_users = array_filter($users, function($user) {
            return $user['*age'] >= 18;
        });
        return $allowed_users;
    }

}
