<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CounselorModel;
use App\Models\ChatModel as ChatModel;
use App\Models\AnonymousModel;
use App\Models\UserModel;

class Anonymous extends BaseController
{
    public function index()
    {
        if (!session()->get('admin_logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('/admin/login');
        } else {
            $user_id = session()->get('id');
            $anonymous = new AnonymousModel();
            $data['anonymous'] = $anonymous
                ->select('tbl_anonymous.*, COUNT(tbl_anonymous_has_like.id) AS like_count')
                ->join('tbl_anonymous_has_like', 'tbl_anonymous.id = tbl_anonymous_has_like.anonymous_id', 'left')
                ->where('tbl_anonymous.is_deleted', 0)
                ->where('tbl_anonymous.is_published', 1)
                ->groupBy('tbl_anonymous.id')
                ->orderBy('id', 'desc')
                ->findAll();

            foreach ($data['anonymous'] as &$entry) {
                // Retrieve comments for each entry
                $entry['comments'] = $anonymous
                    ->select('tbl_anonymous_has_comment.description, tbl_anonymous_has_comment.user_id, tbl_anonymous_has_comment.created_at')
                    ->join('tbl_anonymous_has_comment', 'tbl_anonymous.id = tbl_anonymous_has_comment.anonymous_id', 'left')
                    ->where('tbl_anonymous.id', $entry['id'])
                    ->findAll();
            }
            $data['title'] = 'CHAT';
            return view('admin/anonymous/index', $data);
        }
    }
}
