<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct()
     {
         parent::__construct();
		 $this->load->library('session');
         $this->load->model('m_PageElements','PE');
         $this->load->model('m_Events','EVENT');
         $this->load->model('m_News','NEWS');
         $this->load->model('m_Articles', 'ARTICLE');
		 
     }

	public function index()
	{
        $carousel = $this->PE->get_element('carousel');
        $pengumuman = $this->PE->get_element('pengumuman');
        $pojokrektor = $this->PE->get_element('pojok_rektor');
        $isiPengumuman = json_decode($pengumuman['isi']);
        $isiPojokRektor = json_decode($pojokrektor['isi']);

        //news
        $dataBerita = $this->NEWS->get_recent_news(5);   
        foreach ($dataBerita as $k => $v) {
            foreach ($v['berita_var'] as $vk => $vv) {
				$dataBerita[$k][$vv['var_nama']] = $vv['var_value'];
				$dataBerita[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataBerita[$k]['berita_var']);
        }
        
        //event
        $dataEvent = $this->EVENT->get_upcoming_events(5);   
        foreach ($dataEvent as $k => $v) {
            foreach ($v['event_var'] as $vk => $vv) {
				$dataEvent[$k][$vv['var_nama']] = $vv['var_value'];
				$dataEvent[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
            }
            unset($dataEvent[$k]['event_var']);
        }

//        $dataArtikel = $this->EVENT->get_recent_articles(3);   
//        foreach ($dataArtikel as $k => $v) {
//            foreach ($v['article_var'] as $vk => $vv) {
//				$dataArtikel[$k][$vv['var_nama']] = $vv['var_value'];
//				$dataArtikel[$k][$vv['var_nama'].'_id'] = $vv['var_id'];
//            }
//            unset($dataArtikel[$k]['article_var']);
//        }


        $additionalJS = '<script type="text/javascript">
                            $(document).ready(function () {
                                var hideTweetMedia = function () {
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-media").css("display", "none");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text .timeline-Tweet-author").css("font-family", "Roboto");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-author").css("color", "rgba(46, 49, 146, 0.85)");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text").css("font-size", "10pt");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-Tweet-text").css("line-height", "1");
                                    //$("#twitter-widget-0").css("height", "100%");
                                    $(".twitter").find(".twitter-timeline").contents().find(".timeline-TweetList").bind("DOMSubtreeModifiedpropertychange", function () {
                                        hideTweetMedia(this);
                                    }
                                    );
                                };
                                $(".twitter").delegate("#twitter-widget-0", "DOMSubtreeModified propertychange", function () {
                                    hideTweetMedia();
                                });
                            });
                        </script>';

        $data = array(
            'carousel' => json_decode($carousel['isi']),
            'pengumuman' => $isiPengumuman[0],
            'pojokrektor' => $isiPojokRektor[0],
            'berita' => $dataBerita,
//            'artikel' => $dataArtikel,
            'event' => $dataEvent
        );
        $add = array (
            'additionalJS' => $additionalJS
        );

        $this->load->view('v_Start', $add);
        $this->load->view('v_Home', $data);
        $this->load->view('v_End');
	}
}
