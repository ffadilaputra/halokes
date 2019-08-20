<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AbsensiSiswa extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->authenticate();
  }

  public function index()
  {
    $data['admin'] = $this->session->userdata('admin_logged_in');
    $data['kelas'] = KelasModel::all();

    $this->view('admin.pages.absensisiswa.index', $data);
  }

  public function create($id = NULL)
  {
    $data['admin'] = $this->session->userdata('admin_logged_in');
    if($id){
      // $data['create'] = PenempatanSiswaModel::where('id_masterkelas', $id)->get();
      $data['create'] = PenempatanSiswaModel::with('ids_santri', function($join){
        $join->on('penempatan_siswa_dikelas.id_santri', '=', 'ids_santri.id_santri')
        ->where('id_masterkelas', $id);
      })->get();
      var_dump($data['create']);
        $this->view('admin.pages.absensisiswa.create',$data);
      }
    }

    public function show($id)
    {

    }

    public function store()
    {
      JurusanModel::create($this->input->post());
      redirect('admin/jurusan');
    }

    public function update($id)
    {
      JurusanModel::find($id)->update($this->input->post());
      redirect('admin/jurusan');
    }

    public function delete($id)
    {
      JurusanModel::destroy($id);
      redirect('admin/jurusan');
    }
  }

  ?>
