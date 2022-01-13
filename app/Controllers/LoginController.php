<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\loginModel;
use CodeIgniter\Validation\Rules;
use PDO;

class loginController extends BaseController{

    public function __construct()
    {
        $this->loginModel = new loginModel();
    }

    public function dashboard(){
        if(session()->get('email')==''){
            session()->setFlashdata('failed', 'Silahkan Login terlebih dahulu!');
            return redirect()->to(base_url('/login'));
        }
        echo view('admin/dashboard');
    }

    public function loginPage(){
        if(session()->get('email')=='email'){
            return redirect()->to(base_url('/dashboard'));
        }
        $data = [];
        helper(['form']);
        echo view('admin/login');
    }

    public function registerPage(){
        // if(session()->get('email')==''){
        //     session()->setFlashdata('failed', 'Silahkan Login terlebih dahulu!');
        //     return redirect()->to(base_url('/login'));
        // }
        echo view('admin/register');
    }

    public function regisAdmin(){
        $data = [];
        helper('[form]');

        $rules = $this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[admin.email]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'valid_email' => 'Format {field} tidak valid!',
                    'is_unique' => '{field} telah digunakan!',
                ]
            ],
            'fname' => [
                'label' => 'First Name',
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'min_length' => '{field} minimal 4 karakter!',
                ]
            ],
            'lname' => [
                'label' => 'Last Name',
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'min_length' => '{field} minimal 4 karakter!',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'min_length' => '{field} minimal 4 karakter!',
                ]
            ]
        ]);

        if(!$rules){
            echo view('admin/admin-register');
        }else{
            $model = new loginModel();
            $newData = [
                'email' => $this->request->getVar('email'),
                'fname' => $this->request->getVar('fname'),
                'lname' => $this->request->getVar('lname'),
                'password' => $this->request->getVar('password'),
            ];
            $model->save($newData);
            $session = session();
            $session->setFlashdata('success', 'Register berhasil!');
            return redirect()->to(base_url('/login'));
        }
    }

    public function loginCheck(){
        helper('form');

        if($this->request->getMethod() == 'post'){
            $rules = $this->validate([
                'email' => [
                    'label' => 'Email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib diisi!',
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} wajib diisi!',
                    ]
                ]
            ]);

            if($rules){
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $model = new loginModel();
                $user = $model->asObject()->where('email', $email)->first();
                if($user){
                    if(password_verify($password, $user->password)){
                        session()->set([
                            'email' => $user->email,
                            'fname' => $user->fname,
                            'lname' => $user->lname,
                            'logged_in' => true
                        ]);
                        return redirect()->to(base_url('/dashboard'));
                    }
                }
                session()->setFlashdata('failed', 'Username atau Password salah!');
                return redirect()->to(base_url('/login'));
            }else{
                echo view('/login');
            }
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('/'));
    }
}
