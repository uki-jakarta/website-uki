<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('m_PageElements', 'PE');
        $this->load->model('m_Events', 'EVENT');
    }

    public function index() {
        redirect('event/list_event');
    }

    public function list_event() {
        $slug = $this->uri->segment(3);
        if (($slug != '')&&(strlen($slug)>9)) {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 9);
            //event detail
            $eventdetail = $this->EVENT->get_event_details($slugtitle, date('Y-m-d', $date));
            foreach ($eventdetail['event_var'] as $k => $v) {
                $eventdetail[$v['var_nama']] = $v['var_value'];
            }
            unset($eventdetail['event_var']);
            

            $upcomingEvent = $this->EVENT->get_upcoming_events(5);   
            foreach ($upcomingEvent as $k => $v) {
                foreach ($v['event_var'] as $vk => $vv) {
                    $upcomingEvent[$k][$vv['var_nama']] = $vv['var_value'];
                    $upcomingEvent[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
                }
                unset($upcomingEvent[$k]['event_var']);
            }

            $data = array(
                "upcomingEvent" => $upcomingEvent,
                "dataEvent" => $eventdetail
            );
             
            $this->load->view('v_Start');
            $this->load->view('v_Event', $data);
            $this->load->view('v_End');

        } else {
            $upEvent = $this->EVENT->get_upcoming_events();
            if ($upEvent != '') {
                $dataEvent = '[';
                foreach ($upEvent as $k => $v) {
                    $dataEvent .= '{';
                    $dataEvent .= "id:'".$v['id_event']."',";
                    $dataEvent .= "title:'".$v['judul']."',";
                    $dataEvent .= "start:'".substr($v['tanggal_mulai'],0,10)."'";
                    $dataEvent .= '},';
                }
                $dataEvent = trim($dataEvent, ',');
                $dataEvent .= ']';
            }
            else $dataEvent = '';

            $additionalJS = '<script src="'.base_url('assets/').'fullcalendar/fullcalendar.js"></script><script type="text/javascript">';
            $additionalJS .= " $(document).ready(function () {
                                 $('#calendar').fullCalendar({
                                     header: {
                                         left: '',
                                         center: 'title',
                                         right: 'prev, next today'
                                     },
                                     defaultDate: '2017-08-24',
                                     editable: false,
                                     navLinks: false, 
                                     eventLimit: true, 
                                     businessHours: {
                                         dow: [1, 2, 3, 4, 5, 6], 
                                         start: '10:00', 
                                         end: '18:00',
                                     },
                                     events: $dataEvent
                                 });
                             });
                             </script>";
             $additionalCSS = '<link href="'.base_url('assets/').'fullcalendar/fullcalendar.css" rel="stylesheet"/>
             <link href="'.base_url('assets/').'fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print"/>';

             $JS = array (
                 'additionalJS' => $additionalJS,
                 'additionalCSS' => $additionalCSS,
                 "myarr" => $dataEvent
             );

 
             $data = array(
                 "myarr" => $dataEvent
             );
 
             $this->load->view('v_Start', $JS);
             $this->load->view('v_EventList', $data);
             $this->load->view('v_End');
        }
    }

}
