<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JobPosting extends CI_Controller {

    public function index($page = 'jobPosting')
    {
        
        if ( ! file_exists('application/views/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        
        $data['title']              = ucfirst($page); // Capitalize the first letter
        $data['containerId']        = $page; // Capitalize the first letter
        $this->load->view('/template/header', $data);
        $this->load->view('/template/nav', $data);
        $this->load->view($page, $data);
        $this->load->view('template/footer', $data);

    }




    public function jobPostingCreate($page = 'jobPosting')
    {
        ////  r_jobPostTicket
        ////  r_jobPostCategory
        ////  r_jobPostTitle
        ////  r_jobPostNumOfPositions
        ////  r_jobPostClosingDate
        ////  r_jobPostOpeningDate
        ////  r_jobPostDiscription
        ////  r_jobPostGraphic

        if ($this->input->post('SaveData')==true)       
        {

            $r_jobPostTicket            =$this->input->post('r_jobPostTicket');
            $r_jobPostCategory          =$this->input->post('r_jobPostCategory');
            $r_jobPostTitle             =$this->input->post('r_jobPostTitle');
            $r_jobPostNumOfPositions    =$this->input->post('r_jobPostNumOfPositions');
            $r_jobPostClosingDate       =$this->input->post('r_jobPostClosingDate');
            $r_jobPostOpeningDate       =$this->input->post('r_jobPostOpeningDate');
            $r_jobPostDiscription       =$this->input->post('r_jobPostDiscription');
            //$r_jobPostGraphic         =$this->input->post('r_jobPostGraphic');

            $r_jobPostData = array(
                'r_jobPostTicket'           => $r_jobPostTicket,
                'r_jobPostCategory'         => $r_jobPostCategory,
                'r_jobPostTitle'            => $r_jobPostTitle,
                'r_jobPostNumOfPositions'   => $r_jobPostNumOfPositions,
                'r_jobPostClosingDate'      => $r_jobPostClosingDate,
                'r_jobPostOpeningDate'      => $r_jobPostOpeningDate,
                'r_jobPostDiscription'      => $r_jobPostDiscription
                //'r_jobPostDiscription'        => $r_jobPostDiscription
              );
            
            $this->load->model('JobPosting_model');
            $r_jobPostData = $this->JobPosting_model->JobPostingCreate($r_jobPostData);

            $data['SuccesMsg'] = "you have saved your job Vacant post to the database.";
            
   //          $data['title']               = ucfirst($page); // Capitalize the first letter
            // $data['containerId']         = $page; // Capitalize the first letter
            // $this->load->view('/template/header', $data);
            // $this->load->view('/template/nav', $data);
            // $this->load->view($page, $data);
            // $this->load->view('template/footer', $data);

            //$this->_redirect();
             //index_page($data);
             //$this->index);
             //return index($page = 'jobPosting');

        }

    }


    public function listAllJobposts() {

            // $this->db->select();
            // $this->db->from('r_jobPost');
            // //$this->db->order_by('name');
            // $query = $this->db->get();
            $this->load->model('JobPosting_model');
            $JobPostingGetAllList = $this->JobPosting_model->JobPostingGetAllList();
            

            $JobPostingGetAllList = $this->JobPosting_model->JobPostingGetAllList();


            //$JobPostingGetAllList = json_encode($JobPostingGetAllList); 


            echo $JobPostingGetAllList;



            //return $JobPostingGetAllList;






           //return $query->result($JobPostingGetAllList);
            
              foreach ($JobPostingGetAllList as $row)
              {
                echo "<tr>";
                    echo '<td>'.$row->r_jobPostTicket.'</td>';
                    echo '<td>'.$row->r_jobPostCategory.'</td>';
                    echo '<td>'.$row->r_jobPostTitle.'</td>';
                    echo '<td>'.$row->r_jobPostNumOfPositions.'</td>';
                    echo '<td>'.$row->r_jobPostClosingDate.'</td>';
                    echo '<td>'.$row->r_jobPostOpeningDate.'</td>';
                    echo '<td>'.$row->r_jobPostDiscription.'</td>';
                echo "</tr>";
              }
              


            // $query = $this->db->get('r_jobPost');

            // return $query->result();
    }


    // function index()
    // {
    //  $this->load->view('jobPosting', array('error' => ' ' ));
    // }

    // function do_upload($page = 'jobPosting')
    // {
    //  $config['upload_path']      = 'uploads/';
    //  $config['allowed_types']    = 'gif|jpg|png';
    //  $config['max_size']         = '100';
    //  $config['max_width']        = '1024';
    //  $config['max_height']       = '768';

    //  $this->load->library('upload', $config);

    //  if ( ! $this->upload->do_upload('formJobPostingfile'))
    //  {

    //      $data['error']          = array('error' => $this->upload->display_errors());
    //      $data['title']          = ucfirst($page); // Capitalize the first letter
    //      $data['containerId']    = $page; // Capitalize the first letter

    //      $this->load->view('/template/header', $data);
    //      $this->load->view('/template/nav', $data);
    //      $this->load->view($page, $data);
    //      $this->load->view('template/footer', $data);
    //  }
    //  else
    //  {
    //      $data['SuccesMsg']      = 'Img success fully upload';
    //      $data['title']          = ucfirst($page); // Capitalize the first letter
    //      $data['containerId']    = $page; // Capitalize the first letter

    //      $this->load->view('/template/header', $data);
    //      $this->load->view('/template/nav', $data);
    //      $this->load->view($page, $data);
    //      $this->load->view('template/footer', $data);
    //  }
    // }

    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */