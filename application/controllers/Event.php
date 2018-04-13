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
        if (($slug != '') && (strlen($slug) > 9)) {
            $arrayslug = explode('-', $slug);
            $date = strtotime($arrayslug[0]);
            $slugtitle = substr($slug, 9);
            //event detail
            $eventdetail = $this->EVENT->get_event_details($slugtitle, date('Y-m-d', $date));

            foreach ($eventdetail['event_var'] as $k => $v) {
                $eventdetail[$v['var_nama']] = $v['var_value'];
            }
            //open graph meta
            $meta['og_url'] = base_url('/event/list_event/' . $eventdetail['slug']);
            $meta['og_desc'] = substr(strip_tags($eventdetail['isi']), 0, 300);
            if (isset(json_decode($eventdetail['image'])->url)) {
                $meta['og_img'] = json_decode($eventdetail['image'])->url;
            } else {
                $meta['og_img'] = base_url()."assets/img/logo.png";
            }
            unset($eventdetail['event_var']);

            //fetch start time, end time, start date and end date
            $start_time = date("H:i", strtotime($eventdetail['tanggal_mulai']));
            $end_time = date("H:i", strtotime($eventdetail['tanggal_akhir']));
            $start_date = date("d M Y", strtotime($eventdetail['tanggal_mulai']));
            $end_date = date("d M Y", strtotime($eventdetail['tanggal_akhir']));

            //berikan nilai dari variabel date dan time
            //berikan mdash kalau start dan end nya tidak sama
            if ($start_time != $end_time)
                $eventdetail['time'] = $start_time . ' &mdash; ' . $end_time;
            else
                $eventdetail['time'] = $start_time;
            if ($start_date != $end_date)
                $eventdetail['date'] = $start_date . ' &mdash; ' . $end_date;
            else
                $eventdetail['date'] = $start_date;



            $upcomingEvent = $this->EVENT->get_upcoming_events(5);
            foreach ($upcomingEvent as $k => $v) {
                foreach ($v['event_var'] as $vk => $vv) {
                    $upcomingEvent[$k][$vv['var_nama']] = $vv['var_value'];
                    $upcomingEvent[$k][$vv['var_nama'] . '_id'] = $vv['var_id'];
                }
                unset($upcomingEvent[$k]['event_var']);
            }
            $meta['page_title'] = $eventdetail['judul'];
            $data = array(
                "upcomingEvent" => $upcomingEvent,
                "dataEvent" => $eventdetail
            );

            $this->load->view('v_Start', $meta);
            $this->load->view('v_Event', $data);
            $this->load->view('v_End');
        } else {
            $upEvent = $this->EVENT->get_upcoming_events();
            foreach ($upEvent as $k => $v) {
                foreach ($v['event_var'] as $vk => $vv) {
                    $upEvent[$k][$vv['var_nama']] = $vv['var_value'];
                    $upEvent[$k][$vv['var_nama'] . '_id'] = $vv['var_id'];
                }
                unset($upEvent[$k]['event_var']);
            }
            if ($upEvent != '') {
                $dataEvent = '[';
                foreach ($upEvent as $k => $v) {
                    $dataEvent .= '{';
                    $dataEvent .= "id:'" . $v['id_event'] . "',";
                    $dataEvent .= "title:'" . $v['judul'] . "',";
                    $dataEvent .= "start:'" . substr($v['tanggal_mulai'], 0, 10) . "',";
                    $dataEvent .= "url:'list_event/" . $v['slug'] . "'";
                    $dataEvent .= '},';
                }
                $dataEvent = trim($dataEvent, ',');
                $dataEvent .= ']';
            } else
                $dataEvent = '';

            $additionalJS = '<script src="' . base_url('assets/') . 'fullcalendar/fullcalendar.js"></script><script type="text/javascript">';
            $additionalJS .= " $(document).ready(function () {
                                 $('#calendar').fullCalendar({
                                     header: {
                                         left: '',
                                         center: 'title',
                                         right: 'prev, next today'
                                     },
                                     defaultDate: '" . date('Y-m-d') . "',
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
            $additionalCSS = '<link href="' . base_url('assets/') . 'fullcalendar/fullcalendar.css" rel="stylesheet"/>
             <link href="' . base_url('assets/') . 'fullcalendar/fullcalendar.print.css" rel="stylesheet" media="print"/>';

            $JS = array(
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
