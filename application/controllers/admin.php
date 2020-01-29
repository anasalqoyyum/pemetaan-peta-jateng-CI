<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CSVModel');
        $this->load->model('modelresponden');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->view('admin');
    }

    public function hasil_survey()
    {
        $this->load->database();
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('hasil_survey', $data);
    }



    public function statistika_hasil()
    {
        $this->load->database();
        // $query = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur");
        // $record = $query->result();
        // $data = [];

        // foreach($record as $row){
        //     $data['label'][]=$row->umur;
        //     $data['data'][]=$row->count;
        // }

        $data['umur'] = $this->db->query("select Umur as umur,COUNT(umur) as count from data_responden group by umur")->result();
        $umur = $data['umur'];
        $data = [];

        foreach ($umur as $u) {
            $data['labelumur'][] = $u->umur;
            $data['dataumur'][] = $u->count;
        }

        $data['jeniskelamin'] = $this->db->query("select Jenis_kelamin as jenis_kelamin,COUNT(jenis_kelamin) as count from data_responden group by jenis_kelamin")->result();
        $jeniskelamin = $data['jeniskelamin'];


        foreach ($jeniskelamin as $j) {
            $data['labeljeniskelamin'][] = $j->jenis_kelamin;
            $data['datajeniskelamin'][] = $j->count;
        }

        $data['pendidikan'] = $this->db->query("select Pendidikan as pendidikan,COUNT(pendidikan) as count from data_responden group by pendidikan")->result();
        $pendidikan = $data['pendidikan'];


        foreach ($pendidikan as $p) {
            $data['labelpendidikan'][] = $p->pendidikan;
            $data['datapendidikan'][] = $p->count;
        }

        $data['pekerjaan'] = $this->db->query("select Pekerjaan as pekerjaan,COUNT(pekerjaan) as count from data_responden group by pekerjaan")->result();
        $jeniskelamin = $data['pekerjaan'];


        foreach ($jeniskelamin as $j) {
            $data['labelpekerjaan'][] = $j->pekerjaan;
            $data['datapekerjaan'][] = $j->count;
        }


        $data['chart_data'] = json_encode($data);
        $this->load->view('statistika_hasil', $data);
        // $cek = json_encode($data);
        // print_r($cek);
        // exit();
    }
    // public function statisumur(){
    //     $this->load->database();
    //     $data['data_responden'] = $this->db->query('select Umur as umur from data_responden')->result();
    //     echo json_encode($data);
    // }

    public function list_permintaan_data()
    {
        $this->load->view('list_permintaan_data');
    }

    public function list_ketersediaan_data()
    {
        $this->load->view('list_ketersediaan_data');
    }

    public function list_data()
    {
        $data["data_hujan"] = $this->CSVModel->getAll();
        $this->load->view("list_data", $data);
    }

    // public function load_csv(){
    //     $this->load->database();

    //     $data['csv'] = $this->db->query("select CSV as csv,COUNT(csv) as count from data_hujan group by csv")->result();
    //     $csv = $data['csv'];
    //     $data = [];

    //     foreach($csv as $c){
    //         $data['csv'][]=$c->csv;
    //         $data['datacsv'][]=$c->count;
    //     }
    // $data['csv_data'] = json_encode($data);
    // $this->load->view('list_data',$data);
    // }

    public function upload_data()
    {
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());

        if ($validation->run()) {
            $data_hujan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("upload_data");
    }

    public function edit_data($id = null)
    {       
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());

        if ($validation->run()) {
            $data_hujan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/list_data'));
        }

        $data["data_hujan"] = $data_hujan->getById($id);
        if (!$data["data_hujan"]) show_404();
        $this->load->view("edit_data", $data);
    }

    public function detail_data($id = null)
    {
        $data_hujan = $this->CSVModel;
        $validation = $this->form_validation;
        $validation->set_rules($data_hujan->rules());
        $data["data_hujan"] = $this->CSVModel->getAll();
        $data["data_hujan"] = $data_hujan->getById($id);

        $this->load->view("detail_data", $data);
    }

    public function delete_data($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->CSVModel->delete($id)) {
            redirect(site_url('admin/list_data'));
        }
    }

    public function skm()
    {
        $data['jawaban'] = $this->db->query('select * from jawaban')->result();
        $data['data_responden'] = $this->db->query('select * from data_responden')->result();

        $this->load->view('skm');
    }

    public function detail_responden($id)
    {
        $this->load->database();
        $data['jawaban'] = $this->db->query("select * from jawaban where ID= $id")->result();
        $data['data_responden'] = $this->db->query("select * from data_responden where ID=$id")->result();

        $this->load->view('detail_responden', $data);
    }

    public function hapus_responden($id)
    {
        $where = array(
            'ID' => $id
        );
        $this->modelresponden->delete_data($where, 'jawaban');
        $this->modelresponden->delete_data($where, 'data_responden');


        redirect(base_url() . 'admin/hasil_survey');
    }

    public function tambah_responden()
    {

        $nama = $this->input->post('Nama');
        $email = $this->input->post('Email');
        $umur = $this->input->post('Umur');
        $jeniskelamin = $this->input->post('Jenis_kelamin');
        $pendidikan = $this->input->post('Pendidikan');
        $pekerjaan = $this->input->post('Pekerjaan');
        $data = array(
            'Pekerjaan' => $pekerjaan,
            'Pendidikan' => $pendidikan,
            'Jenis_kelamin' => $jeniskelamin,
            'Umur' => $umur,
            'Email' => $email,
            'Nama' => $nama

        );
        $this->modelresponden->insert_data($data, 'data_responden');

        $jopsi1 = $this->input->post('Jopsi1');
        $jopsi2 = $this->input->post('Jopsi2');
        $jopsi3 = $this->input->post('Jopsi3');
        $jopsi4 = $this->input->post('Jopsi4');
        $jopsi5 = $this->input->post('Jopsi5');
        $jopsi6 = $this->input->post('Jopsi6');
        $jopsi7 = $this->input->post('Jopsi7');
        $jopsi8 = $this->input->post('Jopsi8');
        $jopsi9 = $this->input->post('Jopsi9');
        $jopsi10 = $this->input->post('Jopsi10');
        $jopsi11 = $this->input->post('Jopsi11');
        $jopsi12 = $this->input->post('Jopsi12');
        $jopsi13 = $this->input->post('Jopsi13');
        $jopsi14 = $this->input->post('Jopsi14');
        $jawaban = array(
            'Jopsi1' => $jopsi1,
            'Jopsi2' => $jopsi2,
            'Jopsi3' => $jopsi3,
            'Jopsi4' => $jopsi4,
            'Jopsi5' => $jopsi5,
            'Jopsi6' => $jopsi6,
            'Jopsi7' => $jopsi7,
            'Jopsi8' => $jopsi8,
            'Jopsi9' => $jopsi9,
            'Jopsi10' => $jopsi10,
            'Jopsi11' => $jopsi11,
            'Jopsi12' => $jopsi12,
            'Jopsi13' => $jopsi13,
            'Jopsi14' => $jopsi14,
            'ID' => $id
        );
        $this->modelresponden->insert_data($jawaban, 'jawaban');
        redirect(base_url() . 'admin/skm');
    }
}
