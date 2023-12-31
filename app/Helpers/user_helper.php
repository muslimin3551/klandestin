<?php

use App\Models\CounselorModel;
use App\Models\MembershipModel;
use App\Models\UserModel;



function get_counselor_name($id)
{
    $counselor = new CounselorModel();
    $counselor_data = $counselor->where('id', $id)->first();
    return $counselor_data['name'];
}
function get_user_name($id)
{
    $user = new UserModel();
    $user_data = $user->where('id', $id)->first();
    return $user_data['name'];
}
function get_user_anonym_name($id)
{
    $user = new UserModel();
    $user_data = $user->where('id', $id)->first();
    $name = $user_data['name'];

    // Limit the displayed characters (except the first and last) to maintain anonymity
    $name_length = strlen($name);
    $anon_name = $name[0] . str_repeat('.', $name_length - 2) . $name[$name_length - 1];

    return $anon_name;
}
function get_membership_name($id)
{
    $membership = new MembershipModel();
    $membership_data = $membership->where('id', $id)->first();
    return $membership_data['name'];
}
function get_membership_cost($id)
{
    $membership = new MembershipModel();
    $membership_data = $membership->where('id', $id)->first();
    return 'Rp' . $membership_data['cost'];
}
