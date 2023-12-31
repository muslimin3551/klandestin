<?php

namespace App\Controllers\User;

use App\Models\AnonymousModel;
use App\Models\AnonymousHasLikeModel;
use App\Models\UserModel as UserModel;
use App\Models\AnonymousHasCommentModel;
use App\Controllers\BaseController;

class Anonymous extends BaseController
{
    public function index()
    {
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('login');
        } else {
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
            $data['title'] = 'ANONYMOUS';
            return view('user/anonymous', $data);
        }
    }

    public function add()
    {
        // Include helper form
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('login');
        } else {
            helper(['form']);

            // Set rules validation form
            if ($this->request->getVar('image')) {
                $rules = [
                    'user_id'   => 'required',
                    'description'   => 'required',
                    'image'         => 'uploaded[image]|max_size[image,5024]|is_image[image]'
                ];
            } else {
                $rules = [
                    'user_id'   => 'required',
                    'description'   => 'required'
                ];
            }

            if ($this->validate($rules)) {
                // Handle image upload
                if ($this->request->getVar('image')) {
                    $image = $this->request->getFile('image');
                    $newName = $image->getRandomName();
                    $image->move('uploads/anonymous', $newName);
                } else {
                    $newName = null;
                }
                // Save data to the database
                $model = new AnonymousModel();
                $data = [
                    'user_id'         => $this->request->getVar('user_id'),
                    'description'         => $this->request->getVar('description'),
                    'is_published'        => 1,
                    'created_at'          => date('Y-m-d H:i:s'),
                    'is_deleted'          => 0,
                    'image'               => $newName // Store the image file name in the database
                ];
                $model->save($data);

                // Set flash message and redirect
                $session = session();
                $session->setFlashdata('msg_succes', 'Add Anonymous post data success!');
                return redirect()->to('anonymous');
            } else {
                // Validation failed, show the form again
                $session = session();
                $data['name'] = $session->get('name');
                $data['validation'] = $this->validator;
                $data['title'] = "ADD ARTICLE";
                echo view('user/anonymous', $data);
            }
        }
    }
    public function comment()
    {
        // Include helper form
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('login');
        } else {
            helper(['form']);

            // Set rules validation form
            $rules = [
                'user_id'   => 'required',
                'anonymous_id'   => 'required',
                'description'   => 'required',
            ];

            if ($this->validate($rules)) {
                // Save data to the database
                $model = new AnonymousHasCommentModel();
                $data = [
                    'user_id'         => $this->request->getVar('user_id'),
                    'description'         => $this->request->getVar('description'),
                    'anonymous_id'         => $this->request->getVar('anonymous_id'),
                    'created_at'          => date('Y-m-d H:i:s'),
                    'is_deleted'          => 0
                ];
                $model->save($data);

                // Set flash message and redirect
                $session = session();
                $session->setFlashdata('msg_succes', 'Add Comment data success!');
                return redirect()->to('anonymous');
            } else {
                // Validation failed, show the form again
                $session = session();
                $data['name'] = $session->get('name');
                $data['validation'] = $this->validator;
                $data['title'] = "ADD ARTICLE";
                echo view('user/anonymous', $data);
            }
        }
    }
    public function like($id)
    {
        // Include helper form
        if (!session()->get('logged_in')) {
            // maka redirct ke halaman login
            return redirect()->to('login');
        } else {
            $model = new AnonymousHasLikeModel();
            $like_data = $model->where('anonymous_id', $id)->where('user_id', session()->get('id'))->where('is_deleted', 0)->first();
            // Save data to the database
            if (!$like_data) {
                $data = [
                    'user_id'         => session()->get('id'),
                    'anonymous_id'         => $id,
                    'created_at'          => date('Y-m-d H:i:s'),
                    'is_deleted'          => 0
                ];
                $model->save($data);
            } else {
                $model->where('id', $like_data['id'])->delete();
            }

            // Set flash message and redirect
            $session = session();
            $session->setFlashdata('msg_succes', 'Add Like success!');
            return redirect()->to('anonymous');
        }
    }
}
