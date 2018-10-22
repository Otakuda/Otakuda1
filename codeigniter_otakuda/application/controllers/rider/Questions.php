<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function quizdisplay()
    {
        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');


        $this->data['rider_name'] = $rider_name;
        $this->data['rider_email'] = $rider_email;
        $this->data['rider_password'] = $rider_password;

        $this->load->model('quizmodel');
        $this->data['questions'] = $this->quizmodel->getQuestions();
        $this->load->view('driver/play_quiz', $this->data);
    }

    public function resultdisplay()
    {
        $score = $this->input->post('score');
        $this->data['checks'] = array(
            'ques1' => $this->input->post('quizid1'),
            'ques2' => $this->input->post('quizid2'),
            'ques3' => $this->input->post('quizid3'),
            'ques4' => $this->input->post('quizid4'),
            'ques5' => $this->input->post('quizid5'),
            'ques6' => $this->input->post('quizid6'),
            'ques7' => $this->input->post('quizid7'),
            'ques8' => $this->input->post('quizid8'),
            'ques9' => $this->input->post('quizid9'),
            'ques10' => $this->input->post('quizid10'),

        );
        $this->data['score'] = $score;

        $rider_name = $this->input->post('rider_name');
        $rider_email = $this->input->post('rider_email');
        $rider_password = $this->input->post('rider_password');

        $this->data['rider_name'] = $rider_name;
        $this->data['rider_email'] = $rider_email;
        $this->data['rider_password'] = $rider_password;

        $this->load->model('quizmodel');
        $this->data['results'] = $this->quizmodel->getQuestions();
        $this->session->set_userdata('refered_from', $_SERVER['HTTP_REFERER']);
        $this->load->view('driver/result_display', $this->data);


    }

    public function check_score()
    {
        $score = $this->input->post('score');

        if ($score = 10) {
            echo "<script>";
            echo "alert('成功，请进行下一步')";
            echo "</script>";

            $rider_name = $this->input->post('rider_name');
            $rider_email = $this->input->post('rider_email');
            $rider_password = $this->input->post('rider_password');


            $this->data['rider_name'] = $rider_name;
            $this->data['rider_email'] = $rider_email;
            $this->data['rider_password'] = $rider_password;
            $this->load->view('driver/quiz_game_cont', $this->data);

        } else {
            echo "<script>";
            echo "alert('请重来直到10分为止)";
            echo "</script>";

            redirect("quizdisplay");

//            $rider_name = $this->input->post('rider_name');
//            $rider_email = $this->input->post('rider_email');
//            $rider_password = $this->input->post('rider_password');
//
//
//
//            $this->data['rider_name'] = $rider_name;
//            $this->data['rider_email'] = $rider_email;
//            $this->data['rider_password'] = $rider_password;
//            $this->load->view('driver/quiz_game', $this->data);


        }

    }
}

