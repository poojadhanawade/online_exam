      <?php
      defined('BASEPATH') OR exit('No direct script access allowed');

      class StudentCtrl extends CI_Controller {

        public function index()
        {
          $this->load->view('student_reg');
        }

        public function start_exam()
        {
          if(isset($_POST) && !empty($_POST['student_name']) && !empty($_POST['username']))
          {

            $insert_data = array('student_name' => $this->input->post('student_name'),
              'username' => $this->input->post('username'));

            $res= $this->cmn_mdl->setData('student_result',$insert_data);

            if($res && $res=='1')
            {
             $api_url = "https://opentdb.com/api.php?amount=10";

             $client = curl_init($api_url);

             curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

             $response = curl_exec($client);

             curl_close($client);

             $result = json_decode($response);
             $this->que_ans['result']=$result->results;

             $data['result']=$this->que_ans['result'];
             $data['id']=$this->db->insert_id();

             $this->load->view('examque',$data);

           }
           else
           {
             $this->load->view('student_reg');
           }
         }
         else
         {
           $this->load->view('student_reg');
         }
       }

       public function check_ans()
       {
        if(isset($_POST) && !empty($_POST['id']) && $_POST['check_ans'])
        {

          $score=0;
          $updateData =[];

          if(isset($_POST['check_ans']) && !empty($_POST['check_ans']))
          {
            foreach ($_POST['check_ans'] as $key => $value)
            {
              if(isset($_POST['quizcheck'][$key]))
              {

                if($_POST['quizcheck'][$key]== $value)
                {
                  $score++;
                }

                $updateData["`".($key)."`"]=$_POST['quizcheck'][$key];
              }
              else
              {
               $updateData["`".($key)."`"]='';
             }
           }
         }
         $updateData['score']=$score;

         $where = array('id' =>$this->input->post('id'));

         $res= $this->cmn_mdl->updateData('student_result',$updateData,$where);
                           // print_r($res);
                           // exit();
         $data['score']=$score;

         if($res)
         {  
          if(isset($_GET['type']) && $_GET['type']=='ajx')
          {
           $result = array('status' =>true ,'msg'=>"success",'result'=>[]);
           echo json_encode($result);
           exit();
         }
         $this->load->view('result_show',$data);

       }
       else
       {
        if(isset($_GET['type']) && $_GET['type']=='ajx')
        {
         $result = array('status' =>false ,'msg'=>"false",'result'=>[]);
         echo json_encode($result);
         exit();
       }
       $this->load->view('student_reg');
     }
    }
    else
    {
      if(isset($_GET['type']) && $_GET['type']=='ajx')
        {
         $result = array('status' =>false ,'msg'=>"false",'result'=>[]);
         echo json_encode($result);
         exit();
       }
      $this->load->view('student_reg');
    }
    }

    public function result_show()
    {

      $select='id,score';
      $where = array('id' => $this->input->get('id'));

      $res= $this->cmn_mdl->getWhereData('student_result',$select,$where);

      if($res && count($res)>0)
      {
        $data['score']=$res[0]['score'];
        $this->load->view('result_show',$data);

      }
      else
      {
       $this->load->view('student_reg');
     }
    }



    }
