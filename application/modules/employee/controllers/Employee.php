<?php

    class Employee extends MY_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            $this->load_page('index');
        }

        public function get_employee(){
            $limit = $this->input->post('length');
            $offset = $this->input->post('start');
            $search = $this->input->post('search');
            $order = $this->input->post('order');
            $draw = $this->input->post('draw');
            $column_order = array('employee_id','employee_name','employee_address','employee_birthdate','employee_position','employee_contact_number','employee_image');
            $join = array();
            $select = "*";
            $where = array("employee_active <>" => 0);
            $group = array();
            $list = $this->MY_Model->get_datatables('jogxpress_employee',$column_order, $select, $where, $join, $limit, $offset ,$search, $order, $group);
            $output = array(
                    "draw" => $draw,
                    "recordsTotal" => $list['count_all'],
                    "recordsFiltered" => $list['count'],
                    "data" => $list['data']
            );
		    echo json_encode($output);
        }

        public function insert(){
            $dateUploaded = date('Y-m-d');

            $employee_name = $this->input->post('employee_name');
            $employee_address = $this->input->post('employee_address');
            $employee_birthdate = $this->input->post('employee_birthdate');
            $employee_position = $this->input->post('employee_position');
            $employee_contact_number = $this->input->post('employee_contact_number');

            if(!is_dir('./upload/'. $dateUploaded)){
                mkdir('./upload/'. $dateUploaded);
    
            }

            $config['upload_path']          = './upload/'.$dateUploaded;
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000000000;
            $config['max_width']            = 1000000000;
            $config['max_height']           = 1000000000;
    
    
            $this->load->library('upload', $config);
    
            if ( ! $this->upload->do_upload('imagefile'))
            {
                    $error = array('error' => $this->upload->display_errors());
    
                    //$this->load->view('upload_form', $error);
            }
            else{

                $add = array(
                    'employee_name' => $employee_name,
                    'employee_address' => $employee_address,
                    'employee_birthdate' => $employee_birthdate,
                    'employee_position' => $employee_position,
                    'employee_contact_number' => $employee_contact_number,
                    'employee_date_uploaded' => $dateUploaded,
                    'employee_image' => $this->upload->data('file_name')
                );
    
                $insert = $this->MY_Model->insert('jogxpress_employee', $add);
                echo json_encode($insert);
            }

            
        }

        public function edit_employee(){
            $employee_id = $this->input->post('employee_id');
            $employee_name = $this->input->post('employee_name');
            $employee_address = $this->input->post('employee_address');
            $employee_birthdate = $this->input->post('employee_birthdate');
            $employee_position = $this->input->post('employee_position');
            $employee_contact_number = $this->input->post('employee_contact_number');

            $set = array(
                'employee_name' => $employee_name,
                'employee_address' => $employee_address,
                'employee_birthdate' => $employee_birthdate,
                'employee_position' => $employee_position,
                'employee_contact_number' => $employee_contact_number
            );

            $where = array(
                'employee_id' => $employee_id
            );

            $update = $this->MY_Model->update('jogxpress_employee', $set, $where);

            echo json_encode($update);
        }

        public function delete(){
            $employee_id = $this->input->post('id');
            $where = array( 'employee_id' => $employee_id );
            $update = $this->MY_Model->delete('jogxpress_employee', $where);
    
            echo json_encode($update);
        }

        public function generate_id($employee_id){
            //$this->load->library('Pdf');
            $post = $this->input->post();
            $params['where'] = array(
                'employee_id' => $employee_id
            );

            $data['employees'] = $this->MY_Model->getRows('jogxpress_employee', $params);
            //redirect(base_url('employee/generate'));
            $this->load->view('employee/generate', $data);
            //$html = $this->output->get_output();
        		// Load pdf library
           
            //$this->pdf->createPDF($card.$card);
            //$this->pdf->createPDF($card, 'ID', true);
        
           
        }

        public function bulk_card(){
            $data['employees'] = $this->MY_Model->getRows('jogxpress_employee');
            $this->load->view('employee/employee_bulkcard', $data);
        }

        // public function card(){
        //     $html = $this->load->view('employee/generate', [], true);
        //     $this->pdf->createPDF($html, 'mypdf', false);
        // }

    }





















?>